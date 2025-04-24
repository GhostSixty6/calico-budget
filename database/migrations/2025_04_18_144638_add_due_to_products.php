<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::dropIfExists('products');

      Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('title')->unique();
        $table->integer('price');
        $table->string('shop');
        $table->string('category');
        $table->string('due');
        $table->boolean('status')->default(false);
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
