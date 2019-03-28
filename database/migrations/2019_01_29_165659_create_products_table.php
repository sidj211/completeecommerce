<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer(   'user_id');
            $table->string(    'P_name');
            $table->text(      'P_description');
            $table->text(      'P_specification');
            $table->string(    'P_warranty')->nullable();
            $table->date(      'P_expiry_date');
            $table->date(      'P_manufacture_date')->nullable();
            $table->double(    'P_quantity');
            $table->double(    'P_cost_price');
            $table->double(    'P_tax_id');
            $table->double(    'P_total_cost');
            $table->double(    'P_mrp');
            $table->double(    'P_retail_price');
            $table->double(    'P_retail_tax_id');
            $table->double(    'P_total_retail_price');
            $table->string(    'p_barcode')->nullable();
            $table->string(    'P_unit_id');
            $table->integer(   'P_status');
            $table->text(      'P_condition');
            $table->integer(   'P_discount_id');
            $table->string(    'P_keywords');
            $table->integer(   'subcategory_id');
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
