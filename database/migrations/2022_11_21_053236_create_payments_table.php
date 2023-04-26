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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_bill");
            $table->unsignedBigInteger("id_user");
            $table->unsignedBigInteger("id_payment_method");
            $table->decimal("amount");
            $table->timestamps();

            $table->foreign("id_bill")->references("id")->on("bills");
            $table->foreign("id_payment_method")->references("id")->on("payment_methods");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
