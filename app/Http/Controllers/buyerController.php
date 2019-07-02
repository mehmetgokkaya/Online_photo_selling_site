<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Infotable;
use  App\Creditrequest;
use App\Phototable;
use App\Carttable;
use App\Transactionlist;
use App\Downloadlist;

use App\Http\Requests\ChangePassword;
use App\Http\Requests\changeInformation;
use App\Http\Requests\Credit;
use App\Http\Requests\updatecreditrequest;

class buyerController extends Controller
{
    public function index(){

        

    	return view('buyer.index');
    }

    public function changepassword(){

        

    	return view('buyer.changePassword');
    }

    public function updatepassword(ChangePassword $req){

         
         $value2=$req->session()->get('password');
        if($req->mainPassword==$value2)
        {
            
                    $user = Infotable::find($req->uid);
                    $user->password = $req->password;
                    $user->save();

                    $req->session()->flash('msg', "Password Changed.Please Login with your new Password");

                    return redirect()->route('login.index');
   
        
        }
        else{
            $req->session()->flash('msg', "Invalid Password ");
            return view('admin.changePassword');
        }
    
    }

    public function changeinformation(){

    	$value = session('uid');

        $ds = Infotable::find($value);
        

    	return view('buyer.changeinformation')->with('user', $ds);;
    }

     public function updateinformation(changeInformation $req){

         $value = session('uid');;
        
        
        $user = Infotable::find($value);
        $user->username = $req->username;
        $user->phone = $req->phone;
        $user->save();

        $req->session()->flash('buyer', "Notification: Dear User, Your Information is Updated.");
        return view('buyer.index');
        
    }

     public function creditRequest(){

        

        return view('buyer.creditRequest');
    }

    public function profile(){

        $value = session('uid');

        $ds = Infotable::find($value);
        

        return view('buyer.information')->with('user', $ds);;
    }

    public function storecreditRequest(Credit $req){

        
        $value = session('uid');
        $value1=session('email');

        $value3=$req->email;
        if($value1==$value3){
        $credit = new Creditrequest;
        $credit->amount = $req->amount;
        $credit->date = date('Y-m-d H:i:s');
        $credit->uid = $value;
        $credit->email=$value1;
        
       
        
        $credit->save();

        $req->session()->flash('buyernotification', "Your Credit Request is sent Successfully");

       return redirect()->route('buyer.requestlist');
   }
   else{

      $req->session()->flash('buyernotification', "Invalid Email");
      return view('buyer.creditRequest');
   }
        
       
        

    }

    public function requestlist(){

        $value = session('uid');


        $ds = Creditrequest::all()->where('uid',$value);
        return view('buyer.requestlist')->with('creditrequest',$ds);
    }

    public function requestCreditEdit($cid){
        $ds = Creditrequest::find($cid);
        return view('buyer.requestCreditEdit')->with('creditrequest', $ds);
    }

    public function updateRequestCreditEdit(updatecreditrequest $req, $cid){

       
        
        $credit = Creditrequest::find($cid);
        $credit->amount = $req->amount;
        $credit->date = date('Y-m-d H:i:s');
        
        
        
        $credit->save();
        return redirect()->route('buyer.requestlist');
    }

    public function requestCreditDelete($cid){
        $ds = Creditrequest::find($cid);
        return view('buyer.requestCreditDelete')->with('creditrequest', $ds);
    }

    public function destroyRequestCredit($cid){
        $ds = Creditrequest::destroy($cid);
        
        return redirect()->route('buyer.requestlist');
    }
    public function buyphoto(){

        

        $ds = Phototable::all();
        return view('buyer.showPicture')->with('photoes', $ds);
    }

     public function confirmbuy($pid){
        $value = session('uid');
        $ts=Infotable::find($value);
        $availablebalance=$ts->balance;
        $ds = Phototable::find($pid);

        return view('buyer.confirmbuy')->with('photo', $ds)->with('balance', $availablebalance);
    }

    public function transaction(Request $req , $pid){
        
       $availablebalance=$req->availablebalance;
       $price=$req->photoprice;
        
        if ($availablebalance>=$price) {
            $value = session('uid');
            
            $ds1 = Infotable::find($value);
            $ds1->balance =$ds1->balance - $price;
            $ds1->save();

            $ds2=Infotable::find($req->customerid);
            $ds2->balance =$ds2->balance + $price;
            $ds2->save();

            $downloadphoto=$req->photoname;

            $value2=session('email');

            //save to transaction

            $ts=Phototable::find($pid);

            $transaction= new Transactionlist;
            $transaction->buyeremail=$value2;
             $transaction->buyerid=$value;
              $transaction->sellerid=$ts->uid;
               $transaction->amount=$price;
               $transaction->time=date('Y-m-d H:i:s');

               $transaction->save();
//download list
               $ts=Phototable::find($pid);
               $download= new Downloadlist;
               $download->pid=$pid;
               $download->uid=$value;
               $download->photoname=$ts->photoName;
               $download->imagename=$req->photoname;
               $download->save();



            return view('buyer.downloadphoto')->with('imagename', $downloadphoto);


        }

        else{

            $req->session()->flash('buyer', "Notification: Dear User, Your Credit is low for purchase photo. Please Recharge Credit.");
            return view('buyer.index');

        }
    }


//show download list
         public function downloadablelist(){

         $value = session('uid');

        $ds = Downloadlist::where('uid', $value)
               ->distinct('pid')
               
               ->get();


        
        return view('buyer.downloadlist')->with('photoes', $ds);
    }



public function download($imagename){

    $hello=$imagename;

    return view('buyer.download')->with('imagename', $hello);


}
        

        
    

    

    

    





}
