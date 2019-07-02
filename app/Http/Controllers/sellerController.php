<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Tempupload;
use App\Http\Requests\Tempuploads;
use  App\Infotable;

use App\Http\Requests\ChangePassword;
use App\Http\Requests\changeInformation;
use App\Http\Requests\updatephotoedit;

class sellerController extends Controller
{
     public function index(){



    	return view('seller.index');
    }

    public function profile(){

        $value = session('uid');

        $ds = Infotable::find($value);
        

        return view('seller.information')->with('user', $ds);;
    }

    public function uploadphoto(){



    	return view('seller.uploadPhoto');
    }

    public function storeuploadphoto(Tempuploads $request)
    {


     $time= date('Ymdhms')+rand();

     $value = session('uid');

      $image = $request->select_file;

     

     if($request->hasfile('select_file'))
         {

            
               $photoName = $time.$image->getClientOriginalName(); 

                $image->move('assets/Tempuploads/', $photoName);
                //tbl_temp_image

           

            }
        
      
     

     
        $photo=new Tempupload();
        
    	$photo->photoName=$request->photoName;
    	$photo->photoType=$request->photoType;
    	$photo->photoDescription=$request->photoDescription;
        $photo->askingPrice=$request->askingPrice;
        $photo->photo=$photoName;
        $photo->uid=$value;
        
        
    	$photo->save();

        return redirect()->route('seller.index');
     
    }

    public function changepassword(){

        

        return view('seller.changePassword');
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
        

        return view('seller.changeinformation')->with('user', $ds);;
    }

    public function updateinformation(changeInformation $req){

         $value = session('uid');;
        
        
        $user = Infotable::find($value);
        $user->username = $req->username;
        $user->phone = $req->phone;
        $user->save();

        $req->session()->flash('seller', "Notification: Dear User, Your Information is Updated.");
        return view('seller.index');
        
    }

    public function uploadedphoto(){



        $ds = Tempupload::all();
        return view('seller.showPicture')->with('tempupload',$ds);
    

     }
     public function photoInsert(updatephotoedit $req , $pid)
     {
        $user = Tempupload::find($pid);
        
        
        $user->photoName = $req->photoName;
        $user->photoType = $req->photoType;
        $user->photoDescription = $req->photoDescription;
        $user->askingPrice=$req->price;
        //$user->photo =$req->photo;

        //$user->uid =$req->uid;
        $user->save();
        //$ds = Tempupload::destroy($pid);
       return redirect()->route('seller.uploadedphoto');
        
        





     }
      public function editphoto($pid){




         $ds = Tempupload::find($pid);
        return view('seller.updatePhoto')->with('tempupload',$ds);
    
    

     }
     public function deletePhoto($pid){




        $ds = Tempupload::destroy($pid);
        return redirect()->route('seller.uploadedphoto');
    
    

     }

}
