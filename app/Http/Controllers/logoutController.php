<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class logoutController extends Controller
{
    public function index(Request $request)
    {
    	 
    	$request->session()->flush();
    	return redirect()->route('login.index');
    }
}
