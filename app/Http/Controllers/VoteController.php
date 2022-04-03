<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
  public function index()
  {
    return view('vote.index', [
      'user' => User::where('id', auth()->user()->id)->first(),
      'candidates' => Candidate::all()
    ]);
  }

  public function voting(User $user, $candidate)
  {
    $votingPeriod = User::where('id', 1)->first('status');

    if ($votingPeriod == '1') {
      return redirect('/logout');
    }

    $data = [
      'candidate_id' => $candidate,
      'user_id' => $user->id
    ];

    Vote::create($data);

    $user->status = 1;
    $user->save();

    return response()->json();
  }
}
