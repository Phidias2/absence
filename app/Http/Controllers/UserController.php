<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function index()
{
    $user = Auth::user();
    return view('profile')->with('user', $user);
}

public function edit()
{
  $user = Auth::user();
    return view('auth/edit',['user'=>Auth::user()])->with('user', $user);
}

public function destroy(Request $request) {
    $user = $request->user();
    $user->delete();
    return redirect('/home')->with(['message' => 'User deleted successfully!', 'status' => 'info']);
  }

  
  public function update(Request $request) {
    $password = Hash::make($request->password);
    $postData = ['name' => $request->name,'email' => $request->email, 'phone_number' => $request->phone_number,'password'=>$password];
    $user = Auth::user();
    $user->update($postData);
    return redirect('/profile')->with(['message' => 'Ad updated successfully!', 'status' => 'success']);
  }
  

}
