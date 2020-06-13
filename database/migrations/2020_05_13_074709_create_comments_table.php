<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('pNo')->comment("產品編號")->nullable()->default('123');
            $table->string('pName')->comment("產品名稱")->nullable();
            $table->string('uName', 50)->comment("評論者名稱")->nullable();
            $table->string('uAvatar')->comment("評論者頭像")->nullable();
            $table->float('cRating', 10)->comment('評論評分')->nullable();
            $table->text('cComment')->comment("評論留言")->nullable();
            $table->date('cTime')->comment("評論時間")->nullable();

            $table->unsignedBigInteger('production_id')->index()->nullable()->comment("關聯用的ID");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // $table->dropColumn('comment_id');

        Schema::drop('comments');

    }
}
