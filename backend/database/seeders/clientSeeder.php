<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class clientSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create();
    for ($i = 0; $i < 20; $i++) {
      DB::table('clients')->insert([
        'name' => $faker->firstName(),
        'surname' => $faker->lastName(),
        'created_at' => $faker->dateTime(),
      ]);
    }
  }
}
