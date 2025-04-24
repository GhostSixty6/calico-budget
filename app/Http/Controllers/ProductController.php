<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
      $product = new Product();
      $this->setFields($request, $product);

      return response()->json($product, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
      $this->setFields($request, $product);
      return response()->json($product, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
      $product->delete();
      return response()->json([], 201);
    }

    /**
     * Set the Product fields
     */
    private function setFields($request, Product &$product)
    {
      $fields = [
        'title',
        'shop',
        'category',
        'price',
        'due',
        'status'
      ];

      foreach ($fields as $field) {
        if ($request->has($field)) {
          $product->$field = $request->input($field);
        }
      }

      $product->user_id = $request->user()->id;
      $product->save();
    }
}
