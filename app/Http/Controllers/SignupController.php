<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
    public function index(Request $request){
    	if($request->has('submit')){

    	}
    	return view('user.signup');
    }
}
