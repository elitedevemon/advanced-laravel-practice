<?php

namespace Database\Seeders;

use App\Models\Name;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // if I use the factory method, then I need to directly use the factory.
    Teacher::factory(20)->create();
    
    // if I want to run the seeder file, then I have use this call method.
    $this->call([
      StudentSeeder::class,
    ]);

    // User::factory()->create([
    //   'name' => 'Test User',
    //   'email' => 'test@example.com',
    // ]);
  }
}