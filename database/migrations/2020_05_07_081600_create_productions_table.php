<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("pNo")->comment("商品編號");
            $table->string("pName")->comment("商品名稱");
            $table->text("pPhoto")->comment("商品主照片");
            $table->text("pAlbum")->comment("商品相簿");
            $table->date("pDate")->comment("上架日期");
            $table->string("pBrand", 50)->comment("品牌");
            $table->string("pType", 20)->comment("種類");
            $table->string("pSex", 10)->comment("性別");
            $table->text("pTag")->comment("標籤列");
            $table->float("pRating")->default(5)->comment("商品評分");
            $table->integer("pComntNum")->default(0)->comment("評論過的人數");
            $table->float("pComntRatingNum")->default(0)->comment("評論過的總累積評分");
            $table->string("pState")->default("充足")->comment("商品狀態");
            $table->integer("pPrice")->default(1000)->comment("價格");
            $table->string("pSize")->default("XL,L,M,S")->comment("尺寸");
            $table->text("pIntro")->comment("簡介");
            $table->string("pPlace")->comment("產地");
            $table->text("pMaterial")->comment("材質");
            $table->float("pWeight")->comment("重量");
            $table->text("pComment")->comment("評論")->nullable();
            //$table->unsignedBigInteger("comment_id")->index();
            $table->string("pCupon_title")->nullable()->comment("折扣標題");
            $table->integer("pCupon_price")->nullable()->comment("折扣前的原價");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('productions', function (Blueprint $table) {
            // $table->dropForeign(['comment_id']);
        });
        Schema::dropIfExists('productions');
    }
}
