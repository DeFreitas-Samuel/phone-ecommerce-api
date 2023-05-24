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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("bill_id");
            $table->unsignedBigInteger("user_id");
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('phone_number');
            $table->string('zipcode');
            $table->date("estimated_arrival");
            $table->boolean("delivered");
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("bill_id")->references("id")->on("bills");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipment');
    }
};
