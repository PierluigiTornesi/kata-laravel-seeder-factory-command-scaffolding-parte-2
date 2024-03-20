<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    // $category_ids = Category::all()->pluck('id');

    // // 95 Prodotti non featured
    // for ($i = 0; $i < 95; $i++) {
    //   $product = new Product;
    //   $product->category_id = $faker->randomElement($category_ids);
    //   $product->name = $faker->words(2, true);
    //   $product->description = $faker->paragraphs(4, true);
    //   $product->image = $faker->imageUrl(640, 480, 'cafè', true);
    //   // isbn concatenato per evitare errore generazione fake;
    //   $product->isbn = $faker->randomNumber(7, true) . $faker->randomNumber(6, true);
    //   $product->price = $faker->randomFloat(2, 20, 100);
    //   $product->featured = 0;
    //   $product->save();
    // }

    // // 5 Prodotti featured
    // for ($i = 0; $i < 5; $i++) {
    //   $product = new Product;
    //   $product->category_id = $faker->randomElement($category_ids);
    //   $product->name = $faker->words(2, true);
    //   $product->description = $faker->paragraphs(4, true);
    //   $product->image = $faker->imageUrl(640, 480, 'cafè', true);
    //   // isbn concatenato per evitare errore generazione fake;
    //   $product->isbn = $faker->randomNumber(7, true) . $faker->randomNumber(6, true);
    //   $product->price = $faker->randomFloat(2, 20, 100);
    //   $product->featured = 1;
    //   $product->save();
    // }


    Product::factory()->count(100)->create();
  }
}