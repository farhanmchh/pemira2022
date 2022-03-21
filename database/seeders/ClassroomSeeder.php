<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $classrooms = array(
      array('name' => 'ADMIN'),
      array('name' => 'X BKP 1'),
      array('name' => 'X BKP 2'),
      array('name' => 'X DPIB 1'),
      array('name' => 'X DPIB 2'),
      array('name' => 'X MM 1'),
      array('name' => 'X MM 2'),
      array('name' => 'X MM 3'),
      array('name' => 'X RPL 1'),
      array('name' => 'X RPL 2'),
      array('name' => 'X SIJA'),
      array('name' => 'X TFLM'),
      array('name' => 'X TKJ 1'),
      array('name' => 'X TKJ 2'),
      array('name' => 'X TKR 1'),
      array('name' => 'X TKR 2'),
      array('name' => 'X TKR 3'),
      array('name' => 'X TOI 1'),
      array('name' => 'X TOI 2'),
      array('name' => 'X TP 1'),
      array('name' => 'X TP 2'),
      array('name' => 'XI BKP 1'),
      array('name' => 'XI BKP 2'),
      array('name' => 'XI DPIB 1'),
      array('name' => 'XI DPIB 2'),
      array('name' => 'XI MM 1'),
      array('name' => 'XI MM 2'),
      array('name' => 'XI MM 3'),
      array('name' => 'XI RPL 1'),
      array('name' => 'XI RPL 2'),
      array('name' => 'XI SIJA 1'),
      array('name' => 'XI SIJA 2'),
      array('name' => 'XI TFLM 1'),
      array('name' => 'XI TFLM 2'),
      array('name' => 'XI TKJ'),
      array('name' => 'XI TKR 1'),
      array('name' => 'XI TKR 2'),
      array('name' => 'XI TKR 3'),
      array('name' => 'XI TOI 1'),
      array('name' => 'XI TOI 2'),
      array('name' => 'XI TP'),
      array('name' => 'XII BKP 1'),
      array('name' => 'XII BKP 2'),
      array('name' => 'XII DPIB 1'),
      array('name' => 'XII DPIB 2'),
      array('name' => 'XII MM 1'),
      array('name' => 'XII MM 2'),
      array('name' => 'XII MM 3'),
      array('name' => 'XII RPL 1'),
      array('name' => 'XII RPL 2'),
      array('name' => 'XII SIJA'),
      array('name' => 'XII TFLM'),
      array('name' => 'XII TKJ 1'),
      array('name' => 'XII TKJ 2'),
      array('name' => 'XII TKR 1'),
      array('name' => 'XII TKR 2'),
      array('name' => 'XII TKR 3'),
      array('name' => 'XII TOI 1'),
      array('name' => 'XII TOI 2'),
      array('name' => 'XII TP 1'),
      array('name' => 'XIII SIJA'),
      array('name' => 'XIII TFLM'),
      array('name' => 'XIII TOI 1'),
      array('name' => 'XIII TOI 2'),
      array('name' => 'XII TP 2'),
      array('name' => 'GURU'),
      array('name' => 'STAFF')
    );

    foreach ($classrooms as $classroom) {
      $classroom = Classroom::create([
        'name' => $classroom['name']
      ]);
    }
  }
}
