<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
  public function index()
  {
    return view('candidate.index', [
      'candidates' => Candidate::all()
    ]);
  }
  
  public function get(Candidate $candidate)
  {
    return response()->json($candidate);
  }

  public function update_candidate(Request $request, Candidate $candidate)
  {
    $data = [
      'name' => $request->name,
    ];

    if ($request->image) {
      Storage::delete("/$request->old_image");
      $data['image'] = $request->image->store('candidate_image');
    } else {
      $data['image'] = $request->old_image;
    }

    $candidate->update($data);

    return back()->with('success', "Kandidat nomor $candidate->number berhasil di update");
  }
  
  public function update_vimi(Request $request, Candidate $candidate)
  {
    $data = [
      'vission' => $request->vission,
      'mission' => $request->mission,
    ];

    $candidate->update($data);

    return back();
  }
}
