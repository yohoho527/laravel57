<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('pNum')->default(0)->comment('商品數量');
            $table->string('pNo')->nullable()->comment('商品編號');
            $table->string('pSize', 10)->nullable()->comment('商品尺寸');
            $table->bigInteger('cart_id')->unsigned()->nullable()->delete('cascade');
            $table->foreign('cart_id')->references('id')->on('carts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('cartlists', function (Blueprint $table) {
            $table->dropForeign(['cart_id']);
        });

        Schema::dropIfExists('cartlists');
    }
}
