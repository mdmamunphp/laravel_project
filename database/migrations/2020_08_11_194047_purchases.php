<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Purchases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id');
            $table->integer('user_id')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->date('purchase_date');
            $table->string('product_id');
            $table->integer('quantity');
            $table->double('purchase_price');
            $table->double('branche_id')->nullable();;
            $table->double('sub_total')->nullable();
            $table->double('discount')->nullable();
            $table->double('due_amount')->nullable();
            $table->double('paid_amount');
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
        Schema::dropIfExists('purchases');
    }
}
