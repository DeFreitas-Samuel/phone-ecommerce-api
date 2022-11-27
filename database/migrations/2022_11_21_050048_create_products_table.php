<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger("id_brand");
            $table->foreign("id_brand")->references("id")->on("brands");
            $table->unsignedBigInteger("id_product_type");
            $table->foreign("id_product_type")->references("id")->on("product_types");
            $table->string("name");
            $table->decimal("price");
            $table->binary("image")->nullable();
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
};
