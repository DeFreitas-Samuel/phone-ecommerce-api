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
            $table->unsignedBigInteger("brand_id");
            $table->unsignedBigInteger("product_type_id");
            $table->string("name");
            $table->decimal("price");
            $table->string("description");
            $table->string("specifications");
            $table->string("imageUrl", 500)->nullable();
            $table->timestamps();

            $table->foreign("brand_id")->references("id")->on("brands");
            $table->foreign("product_type_id")->references("id")->on("product_types");

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
