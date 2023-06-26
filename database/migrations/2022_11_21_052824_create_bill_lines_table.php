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
            $table->unsignedBigInteger("bill_id");
            $table->unsignedBigInteger("product_id");
            $table->string("description");
            $table->integer("quantity");
            $table->decimal("price");
            $table->timestamps();

            $table->foreign("bill_id")->references("id")->on("bills");
            $table->foreign("product_id")->references("id")->on("products");
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
            Schema::table('bill_lines', function (Blueprint $table) {
                $table->dropForeign('bill_lines_bill_id_foreign');
                $table->dropForeign('bill_lines_product_id_foreign');
            });
        } catch (Throwable $e) {
            //Do Nothing
        }
        Schema::dropIfExists('bill_lines');
    }
};
