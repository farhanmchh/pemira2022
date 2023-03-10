<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
  use HasFactory;

  protected $table = 'votes';
  protected $guarded = ['id'];

  public function candidate()
  {
    return $this->belongsTo(Candidate::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
