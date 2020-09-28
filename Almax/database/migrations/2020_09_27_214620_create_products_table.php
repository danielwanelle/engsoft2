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
                $table->foreignId('provider_id')->constrained();
                $table->foreignId('invoice_id')->constrained();
                $table->foreignId('outlet_id')->constrained()->nullable();
                $table->timestamps();
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
