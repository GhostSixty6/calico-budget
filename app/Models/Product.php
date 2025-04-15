<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
      'title',
      'notes',
      'price',
      'shop',
      'category',
      'link',
      'status',
      'user_id',
  ];
}
