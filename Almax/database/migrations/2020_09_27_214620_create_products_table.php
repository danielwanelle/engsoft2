<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::transaction(function () {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('description');
                $table->integer('quantity');
                $table->float('value');
                $table->date('due');
                $table->integer('minimal');
                $table->string('category');
                $table->integer('provider_id')->unsigned();
                $table->integer('invoice_id')->unsigned();
                $table->integer('outlet_id')->nullable();
                $table->timestamps();
            });
            Schema::table('products', function (Blueprint $table) {
                $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
                $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
                $table->foreign('outlet_id')->references('id')->on('outlets')->onDelete('cascade');
            });
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
