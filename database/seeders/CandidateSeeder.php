<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $array = [1, 1, 1, 1];

    foreach ($array as $key => $arr) {
      Candidate::create([
        'number' => $key + 1,
        'name' => 'Candidate Name',
        'image' => 'image.jpg'
      ]);
    }
  }
}
