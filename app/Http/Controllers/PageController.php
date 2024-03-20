<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class PageController extends Controller
{
  public function index()
  {
    // $featured_products = Product::where('featured', 1)->orderBy('price')->limit(5)->get();
    // return view('home', compact('featured_products'));
    $categories_unique = Product::where('featured', 1)->distinct('category_id')->pluck('category_id');
    $featured_products = collect();
    foreach ($categories_unique as $id_cat) {
      $featured_product = Product::where('featured', 1)->where('category_id', $id_cat)->orderBy('price')->first();
      if($featured_product){
        $featured_products->push($featured_product);
      }
    }
    return view('home', compact('featured_products'));
  }
}