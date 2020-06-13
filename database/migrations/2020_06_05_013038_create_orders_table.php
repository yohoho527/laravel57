<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('totalPrice')->default(0)->comment('總價');
            $table->string('paidMsur')->comment('付款方法');
            $table->longText('remarks')->comment('備註訊息')->nullable();
            $table->text('addr')->nullable()->comment('配送地址');
            $table->boolean('enable')->comment('可被啟用')->default(true);
            $table->string('state')->comment('訂單狀態')->default(true);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
