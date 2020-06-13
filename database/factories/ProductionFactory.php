<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Production;
use Faker\Generator as Faker;

$factory->define(Production::class, function (Faker $faker) {
    $image = "https://awsimage1.banner.tw/store73/upload/2020Apr/png/20200402115035230_2.png";
    $album = "https://awsimage1.banner.tw/store73/upload/2020Apr/png/20200402115035230_2.png, https://awsimage1.banner.tw/store73/upload/2020Apr/png/20200402105322760_2.png";

    $intro = "Cool Parka 是完美的防曬選擇，可保護您免受太陽紫外線的傷害，並具有出色的透氣性。 Cool Parka 的布料經過 DWR 防撥水處理，適合從事水域活動。 有兩個口袋，帽兜和加長的袖子，具有出色的防曬效果， 在炎熱天氣的天氣中健行、登山、旅遊或是騎機車單車通勤都適合。";
    return [
        //
        'pNo' => '1114460-PRBL', 'pName' => 'Mont-bell 長袖快乾排汗衣 男 初級藍 Cool Parka 1114460',
        'pPhoto' => $image,
        'pAlbum' => $album,
        'pDate' => \Carbon\Carbon::now()->addDays(3),
        'pBrand' => 'Mont-bell', 'pType' => '外套',
        'pSex' => '男', 'pTag' => '折扣,保暖',
        'pRating' => 5,
        'pComntNum' => 1,
        'pComntRatingNum' => 5, 'pState' => '充足',
        'pPrice' => 1000, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro,
        'pPlace' => $faker->country,
        'pMaterial' => '100% Polyester', 'pWeight' => '181',
        'pComment' => $faker->realText(),
        'pCupon_title' => "八折優惠",
        'pCupon_price' => 2000,
    ];
});

// $factory->define(Production::class, function ($pNo = 123, $pName = '飛行夾克', $pPhoto = 'img', $pAlbum = 'img', $pDate = '', $pType = '外套', $pBrand = 'Nike', $pSex = 'M', $pTag = '', $pRating = 5, $pCoimntNum = 1, $pComntRatingNum = 5, $pState = '充足', $pPrice = 1000, $pPlace = '美國', $pMaterial = "cuton 100%", $pWeight = 80.3, $pComment) {
//     return [
//         //
//         'pNo' => $pNo, 'pName' => $pName,
//         'pPhoto' => $pPhoto,
//         'pAlbum' => $pAlbum,
//         'pDate' => $pDate,
//         //'pDate' => \Carbon\Carbon::now()->addDays(3),
//         'pBrand' => $pBrand, 'pType' => $pType,
//         'pSex' => $pSex, 'pTag' => $pTag,
//         'pRating' => $pRating,
//         'pComntNum' => $pCoimntNum,
//         'pComntRatingNum' => $pComntRatingNum, 'pState' => $pState,
//         'pPrice' => $pState, 'pSize' => 'X,M,S', 'pIntro' => 'asdkopqqwkowopk',
//         'pPlace' => $pPlace,
//         'pMaterial' => $pMaterial, 'pWeight' => $pWeight,
//         'pComment' => $pComment,
//     ];
// });
