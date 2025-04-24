<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/{params?}', function (?string $default = null) {

  $params = [
    'status' => 'all',
    'shop' => 'all',
    'due' => 'all',
  ];

  if ($default) {

    $default_arr = [];
    parse_str($default, $default_arr);

    $params['status'] = isset($default_arr['status']) ? $default_arr['status'] : $params['status'];
    $params['shop'] = isset($default_arr['shop']) ? $default_arr['shop'] : $params['shop'];
    $params['due'] = isset($default_arr['due']) ? $default_arr['due'] : $params['due'];
  }

  $user = auth()->user();
  $all_products = Product::all();

  $products = $categories = $dues = $shops = [];
  $expenses = $pending_expenses = $left_over = 0;
  $income = $user ? $user->income : 0;

  foreach ($all_products as $product) {
    $categories[$product->category] = $product->category;
    $dues[$product->due] = $product->due;
    $shops[$product->shop] = $product->shop;

    if ($product->status == 0) {
      $expenses += $product->price;
      $pending_expenses++;
    } else {
      $expenses += $product->price;
    }

    if($params['status'] != 'all' && $params['status'] != $product->status) {
      continue;
    }

    if($params['shop'] != 'all' && $params['shop'] != $product->shop) {
      continue;
    }

    if($params['due'] != 'all' && $params['due'] != $product->due) {
      continue;
    }

    $products[] = $product;
  }

  usort($products, function ($a, $b) {
    if ($a->status == $b->status) {
      return strcmp($a->title, $b->title);
    }
    return $a->status ? 1 : -1;
  });

  $left_over = $income - $expenses;

  return view('home', [
    'products' => $products, 
    'categories' => $categories, 
    'dues' => $dues, 
    'shops' => $shops,
    'stats' => [
      'income' => $income,
      'expenses' => $expenses,
      'left_over' => $left_over,
      'pending_expenses' => floor($pending_expenses / count($all_products) * 100),
    ],
  ]);
})->middleware('auth.basic');


Route::post('api/products', [ProductController::class, 'store']);
Route::put('api/products/{product}', [ProductController::class, 'update']);
Route::delete('api/products/{product}', [ProductController::class, 'destroy']);

Route::put('api/users', [UserController::class, 'update']);

#Route::get('products', 'ProductController@index');
#Route::get('products/create', [ProductController::class, 'create']);
#Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
#Route::get('products/{product}', 'ProductController@show');