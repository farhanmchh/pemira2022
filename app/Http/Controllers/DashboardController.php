<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Candidate;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $countdown = 0;

    if (auth()->user()->status == 1) {
      $countdown = 1;
    }

    return view('dashboard.index', [
      'countdown' => $countdown,
      'klaster' => Classroom::get()->count() - 1,
      'pemilih' => User::get()->count() - 1,
      'kandidat' => Candidate::get()->count(),
      'suara_masuk' => Vote::get()->count(),
    ]);
  }

  public function get()
  {
    $candidates = Candidate::all();
    $result = [];

    foreach ($candidates as $candidate) {
      $votes = Vote::where('candidate_id', $candidate->id)->count();
      array_push($result, $votes);
    }

    $data = [$candidates, $result];

    return response()->json($data);
  }

  public function countdown()
  {
    $user = User::where('id', auth()->user()->id)->first();
    $user->update(['status' => 1]);
  }
}
