<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Category;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {

    $csvData = fopen(base_path('database/csv/categories.csv'), 'r');
    $transRow = true;
    while (($data = fgetcsv($csvData, 555, ',')) !== false) {
      if (!$transRow) {
        Category::create([
          'label' => $data['0'],
          'color' => $data['1'],
        ]);
      }
      $transRow = false;
    }
    fclose($csvData);
  }
}