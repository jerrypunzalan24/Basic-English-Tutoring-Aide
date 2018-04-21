<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
  public function add(Request $request){
    if($request->has('btnAdd')){
      $username = trim($request->uname);
      $checkusername = \DB::table('accounts')->where('username', $username)->select('*')->get();
      if(count($checkusername)==0){
        $firstname = trim($request->fname);
        $lastname = trim($request->lname);
        $password = password_hash(trim($request->password),PASSWORD_DEFAULT);
        $isadmin = ($request->admin)? 1 : 0;
        \DB::table('accounts')->insertgetId([
          'username' => $username,
          'password' => $password,
          'fname' => $firstname,
          'lname' => $lastname,
          'admin' => $isadmin,
          'about' => '',
          'display_picture' =>'',
          'accounts_settings' => ''
        ]);
        return redirect('dashboard/accounts_admin/add')->with('success', 'Account has been added');
      }
      return redirect()->back()->withInput()->with('error','Username already exist');
    }
    return view("dashboard.admin.add_account");
  }
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
        'about' => $about
      ]);
      return redirect("/dashboard/accounts_admin/edit/{$id}")->with('success','User info has been edited');
    }
    else if($request->has('updatePass')){
      $currentpass = $request->cpass;
      $checkpass = \DB::table('accounts')->where('id',$id)->first();
      if(password_verify($currentpass, $checkpass->password)){
        $hashed_pwd = password_hash($request->npassword);
        \DB::table('accounts')->where('id',$id)->update(['password'=>$hashed_pwd]);
        return redirect("/dashboard/accounts/edit/{id}")->with('success','Password has been changed');
      }
    }
    return view('dashboard.admin.edit_account',['account'=>$account]);
  }
  public function delete(Request $request){
    \DB::table('accounts')->where('id',$request->id)->delete();
    return redirect('dashboard/accounts_admin')->with('success','Account has been deleted');
  }
}
