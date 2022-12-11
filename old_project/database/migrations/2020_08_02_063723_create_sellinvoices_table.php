<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellinvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellinvoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id');
            $table->integer('branch_id');
            $table->integer('customer_id');
            $table->double('sub_total');
            $table->double('discount');
            $table->double('paid_amount');
            $table->date('sale_date');
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
        Schema::dropIfExists('sellinvoices');
    }
}
