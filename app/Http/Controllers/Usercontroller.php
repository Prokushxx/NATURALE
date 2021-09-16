<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
  public function userpage(){
    $user = User::all();
    return view('users',['users'=>$user]);
  }


  public function destroyusers($user)
  {
    $user = sign_up::where('Username',$user);
    $user->delete();
    return redirect()->back();
  }
}
