<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('product_type')->nullable();
            $table->integer('categories_id')->nullable();
            $table->integer('subcategories_id')->nullable();        
            $table->integer('brand_id')->nullable();
            $table->integer('unit_id')->nullable();       
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->string('reorder')->nullable();
            $table->string('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
