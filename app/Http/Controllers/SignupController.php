<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
	public function index(){
		return view('user.signup');
	}
	public function create(Request $request){
		if($request->has('signup')){
			$firstname = trim($request->fname);
			$lastname = trim($request->lname);
			$username = trim($request->uname);
			$hashed_pwd = password_hash($request->pass, PASSWORD_DEFAULT);
			\DB::insert("INSERT into accounts(admin, username, password, fname, lname, about,display_picture,accounts_settings) VALUES(0,'$username','$hashed_pwd','$firstname','$lastname','','','')");
		}
		return redirect('/')->with('success', "User {$username} has been created");
	}
}
