<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function edit(Request $request, $id){
    $account = \DB::table('accounts')->where('id',$id)->first();
    if($request->has('updateInfo')){
      $username = trim($request->username);
      $firstname = trim($request->fname);
      $lastname = trim($request->lname);
      $about = $request->about ?? "";
      \DB::table('accounts')->where('id',$id)->update([
        'username' => $username,
        'fname' => $firstname,
        'lname' => $lastname,
        'about' => ''
      ]);
      return redirect()->back()->with('success','Profile updated successfully');
    }
    else if($request->has('updatePass')){
      if(password_verify($request->cpassword, $account->password)){
        $newpass = password_hash(trim($request->npassword), PASSWORD_DEFAULT);
        \DB::table('accounts')->where('id',$id)->update([
          'password' => $newpass
        ]);
        return redirect()->back()->with('success','Profile updated successfully');
      }
      return redirect()->back()->with('error','Incorrect password');
    }
    else if($request->has('submitImage')){
      // \DB::table('accounts')->where('id',$id)->update([
      //   'display_picture' => ]);
    }
    return view('dashboard.user.edit',['account' => $account]);
  }
}
