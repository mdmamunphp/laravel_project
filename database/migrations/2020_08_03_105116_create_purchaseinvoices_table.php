<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseinvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseinvoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id');
            $table->integer('user_id');
            $table->integer('supplier_id');
            $table->double('purchase_price');
            $table->date('purchase_date');
            $table->double('sub_total');
            $table->double('discount');
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
        Schema::dropIfExists('purchaseinvoices');
    }
}
