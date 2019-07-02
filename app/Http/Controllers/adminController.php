<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Infotable;
use App\Creditrequest;
use App\Phototable;
use App\Tempupload;
use App\Http\Requests\ChangePassword;
use App\Http\Requests\changeInformation;
use App\Http\Requests\updatephotoedit;

class adminController extends Controller
{
    public function index(){

        

    	return view('admin.index');
    }

    public function showUserList(){

        

    	$ds = Infotable::all()->whereNotIn('type','admin');
    	return view('admin.userList')->with('infotable',$ds);
    }

    public function profile(){

        $value = session('uid');

        $ds = Infotable::find($value);
        

        return view('admin.information')->with('user', $ds);;
    }

    public function userEdit($uid){
        $ds = Infotable::find($uid);
        return view('admin.editUser')->with('infotable', $ds);
    }

    public function updateUserEdit(Request $req, $uid){

        
        $ds = Infotable::find($uid);
        $ds->username = $req->userName;
        $ds->email = $req->userEmail;
        $ds->phone = $req->userPhone;
        
        
        $ds->save();
        return redirect()->route('admin.userList');
    }

    public function deleteUser($uid){
        $ds = Infotable::find($uid);
        return view('admin.deleteUser')->with('infotable', $ds);
    }

    public function destroyUser($uid){
        $ds = Infotable::destroy($uid);
        
        return redirect()->route('admin.userList');
    }

    public function showCreditList(){

        

        $ds = Creditrequest::all();
        return view('admin.creditrequest')->with('creditrequest',$ds);
    }

    public function updateRequest($cid){

       


        $ds = Creditrequest::find($cid);
        $userid=$ds->uid;

       


        $ds1 = Infotable::find($userid);
        $ds1->balance =$ds1->balance + $ds->amount;
        $ds1->save();

        $ds = Creditrequest::destroy($cid);

        return redirect()->route('admin.creditrequest');



        
    }

    public function deleteRequest($cid){


        $ds = Creditrequest::destroy($cid);
        return redirect()->route('admin.creditrequest');
    }

    public function changePassword(){

        

        
        return view('admin.changePassword');
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


    public function changeInformation(){



        $value = session('uid');

        $ds = Infotable::find($value);
        

        return view('admin.changeInformation')->with('user', $ds);;
    

     }


     public function updateinformation(changeInformation $req){

         $value = session('uid');
        
        
        $user = Infotable::find($value);
        $user->username = $req->username;
        $user->phone = $req->phone;
        $user->save();

        $req->session()->flash('msg', "Notification: Dear User, Your Information is Updated.");
        return redirect()->route('admin.index');
        
    }

    public function photoInfo(){



        $ds = Tempupload::all();
        return view('admin.showPicture')->with('tempupload',$ds);
    

     }

     public function photoEdit($pid){




         $ds = Tempupload::find($pid);
        return view('admin.updatePhoto')->with('tempupload',$ds);
    
    

     }
     public function photoInsert(updatephotoedit $req , $pid)
     {

        $user = new Phototable;
        $user->pid = $pid;
        $user->photoName = $req->photoName;
        $user->photoType = $req->photoType;
        $user->photoDescription = $req->photoDescription;
        $user->price=$req->price;
        $user->photo =$req->photo;

        $user->uid =$req->uid;
        $user->save();
        $ds = Tempupload::destroy($pid);
       return redirect()->route('admin.photoInfo');
        
        





     }

      public function deletePhoto($pid){




        $ds = Tempupload::destroy($pid);
        return redirect()->route('admin.photoInfo');
    
    

     }
}
