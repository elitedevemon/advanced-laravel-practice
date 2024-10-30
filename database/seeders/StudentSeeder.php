<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // One type of method
    // $students = collect([
    //   [
    //     "name" => "MD EMON HASSA",
    //     "email" => "mdemonhassan@gmail.com",
    //   ],
    //   [
    //     "name" => "MD SAGOR AHMED",
    //     "email" => "mdsagorahmed@gmail.com",
    //   ],
    //   [
    //     "name" => "MD IMAN AHMED",
    //     "email" => "mdimanahmed@gmail.com",
    //   ]
    // ]);
    $json = File::get('database/json/students.json');
    $students = collect(json_decode($json));
    $students->each(function($student){
      Student::create([
        'name' => $student->name,
        'email' => $student->email
      ]);
    });
  }
}