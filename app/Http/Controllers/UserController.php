<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\User;
use App\Models\Vote;
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

  public function get_user($param)
  {
    $user = User::find($param);
    return response()->json($user);
  }

  public function get_users($param)
  {
    $users = User::whereHas(
      'classroom',
      fn ($query) =>
      $query->where('name', $param)
    )->get();

    return response()->json($users);
  }

  public function clear_vote(User $user)
  {
    Vote::where('user_id', $user->id)->delete();

    $user->status = 0;
    $user->save();

    return response()->json($user);
  }
}
