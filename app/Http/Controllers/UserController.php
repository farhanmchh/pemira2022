<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return view('user.index', [
      'users' => User::filter(Request('filter'))->get(),
      'classrooms' => Classroom::all()->except(1)
    ]);
  }

  public function get($param)
  {
    $users = User::whereHas('classroom', fn($query) => 
      $query->where('name', $param)
    )->get();

    return response()->json($users);
  }
}
