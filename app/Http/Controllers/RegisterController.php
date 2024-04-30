<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function showRegistrationForm()
  {
    return view('auth.register');
  }

  public function register(Request $request)
  {
    // バリデーション
    $validatedData = $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:8|confirmed',
    ]);

    // ユーザー登録
    $user = User::create([
      'name' => $validatedData['name'],
      'email' => $validatedData['email'],
      'password' => Hash::make($validatedData['password']),
    ]);

    // ログイン処理
    Auth::login($user);

    return redirect()->intended('/dashboard');
  }
 

}
