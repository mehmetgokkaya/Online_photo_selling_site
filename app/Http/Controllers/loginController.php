<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Infotable;
use App\Http\Requests\Signuprequest;

class loginController extends Controller
{
    public function index(){



    	return view('login.index');
    }

    public function verify(Request $req){
        
        $user = DB::table('infotable')->where('email', $req->email)
            ->where('password', $req->password)
            ->first();

    	if($user){
            if($user->type=='admin')
            {
                $req->session()->put('email', $req->email);
                $req->session()->put('uid', $user->uid);
                $req->session()->put('password', $req->password);
                $req->session()->put('user',$user);
    		return redirect()->route('admin.index');
        }
            else if($user->type=='seller'){
                $req->session()->put('email', $req->email);
                $req->session()->put('uid', $user->uid);
                $req->session()->put('password', $req->password);
                $req->session()->put('seller1',$user);
            return redirect()->route('seller.index');

            }
            else if($user->type=='buyer'){
                $req->session()->put('email', $req->email);
                $req->session()->put('uid', $user->uid);
                $req->session()->put('password', $req->password);
                $req->session()->put('buyer1',$user);
            return redirect()->route('buyer.index');

            }
    	}else{

            $req->session()->flash('msg', "Invalid username/password");
    		return redirect('/login');
            
    	}
    }

    public function signupindex(){

        

        return view('login.signup');
    }

    public function storedata(Signuprequest $req){

        
        $user = new Infotable;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
        $user->phone = $req->phonenumber;
        $user->balance =0;
        $user->type =$req->usertype;
       
        
        $user->save();

        $req->session()->flash('msg', "Sign up Successfully.Please Login");

        return redirect('/login');
        
       
        

    }

    public function contactus(){

        

        return view('login.contact');
    }

    public function forget(){

        

        return view('login.forgot');
    }
}
