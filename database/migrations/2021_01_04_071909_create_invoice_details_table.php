<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id');
            $table->string('trade_name');
            $table->string('mdpt_id');
            $table->string('sdpt_id');
            $table->string('gsttax');
            $table->string('psttax');
            $table->string('incometax');
            $table->string('punjabincometax');
            $table->string('ddate');
            $table->string('subtotal');
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
        Schema::dropIfExists('invoice_details');
    }
}
