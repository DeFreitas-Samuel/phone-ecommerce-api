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
        Schema::create('bill_lines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_bill");
            $table->unsignedBigInteger("id_product");
            $table->integer("quantity");
            $table->decimal("price");
            $table->timestamps();

            $table->foreign("id_bill")->references("id")->on("bills");
            $table->foreign("id_product")->references("id")->on("products");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_lines');
    }
};
