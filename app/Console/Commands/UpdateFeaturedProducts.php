<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class UpdateFeaturedProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:update-featured';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the featured products';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $products = Product::all();
       foreach ($products as $product) {
        $product->update(['featured' => (bool)random_int(0,1)]);
        $updateProductsName[]=$product->name;
       }

       $this->info('Featured products updated correctly');
    }
}
