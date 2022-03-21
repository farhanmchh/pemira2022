<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
  public function login()
  {
    return view("login");
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'username' => ['required'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      if (auth()->user()->role == 'admin') {
        return redirect('/dashboard');
      } else {
        return redirect('/vote');
      }
    }

    return 'back()';
  }

  public function dashboard()
  {
    return view("dashboard/index");
  }
  public function user()
  {
    return view("user/index");
  }
  public function candidate()
  {
    return view("candidate.index");
  }
  public function vote()
  {
    return view("vote/index");
  }

  public function logout(Request $request)
  {
    $request->session()->invalidate();
    return redirect("/");
  }
}
