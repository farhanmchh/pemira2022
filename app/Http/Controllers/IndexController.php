<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
  public function login()
  {
    $votingPeriod = User::where('id', 1)->first('status');

    return view('login', [
      'votingPeriod' => $votingPeriod
    ]);
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
        $votingPeriod = User::where('id', 1)->first('status');

        if ($votingPeriod == '1') {
          return back();
        }

        if (auth()->user()->status) {
          Auth::logout();
          $request->session()->invalidate();
          $request->session()->regenerateToken();

          return back()->with('error', 'Kamu sudah menggunakan hak suara');
        }

        return redirect('/vote');
      }
    }

    return back()->with('error', 'Login error');
  }

  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
  }
}
