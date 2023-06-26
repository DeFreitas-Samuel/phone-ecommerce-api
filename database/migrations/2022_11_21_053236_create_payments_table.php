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
            $table->unsignedBigInteger("bill_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("payment_method_id");
            $table->decimal("amount");
            $table->string("last_4_digits_of_card")->nullable();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("bill_id")->references("id")->on("bills");
            $table->foreign("payment_method_id")->references("id")->on("payment_methods");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        try {
            Schema::table('payments', function (Blueprint $table) {
                $table->dropForeign('payments_bill_id_foreign');
                $table->dropForeign('payments_payment_method_id_foreign');
                $table->dropForeign('payments_user_id_foreign');
            });
        } catch (Throwable $e) {
            //Do Nothing
        }
        Schema::dropIfExists('payments');
    }
};
