<?php

use App\Production;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProductionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        Production::truncate();
        // for ($i = 0; $i < 5; $i++) {
        //     # code...
        //     $production = factory(Production::class)->create();
        // }
        $production = factory(Production::class)->create();

      //第二個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745320/0/123120?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745320/0/123120?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745320/1/123120?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745320/2/123120?v=1";

      $intro2 = "商品編號<br>
      5745320<br>
      銷售重點<br>
      * Omni-Tech科技防水，同時兼具透氣舒適<br>
      * Omni-HEAT™ 鋁點保暖科技<br>
      * 450 fill power鵝絨<br>
      * 可調整腰圍<br>
      * 內附安全暗袋<br>
      * 可拆式人造皮草<br>
      * 下擺可調整式拉繩<br>
      * 前短後長版型<br>
      * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => '111sada0-PRBL', 'pName' => 'Columbia 哥倫比亞 女款- Omni-TEC 防水鋁點保暖羽絨大衣',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Mont-bell', 'pType' => '外套',
          'pSex' => '女', 'pTag' => '保暖,時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 3000, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% Polyester', 'pWeight' => '181',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第二個產品結尾

      //第三個產品
      $image2 = "https://www.blackdiamondequipment.com.tw/upload/products_photo/photo_big/b1561701454328407.jpg";

      $album2 = "https://www.blackdiamondequipment.com.tw/upload/products_photo/photo_big/b1561701454328407.jpg,
              https://www.blackdiamondequipment.com.tw/upload/products_photo/photo_big/b1561701446328420.jpg,
              https://www.blackdiamondequipment.com.tw/upload/products_photo/photo_big/b1561701450328615.jpg";

      $intro2 = "商品編號<br>
               1200007010014<br>
               銷售重點<br>
               * 2019年短袖上衣材質全面升級<br>
               * 選用對環境友善的精梳有機棉<br>
               * 直徑小的棉纖維交織出滑順舒適的T-shirt<br>
               * 145g 超輕薄適合台灣夏季炎熱氣候<br>
               * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => '951odw0-QpBY', 'pName' => ' Black Diamond  BRAND TEE 短袖上衣',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Black Diamond', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '時尚,防水,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 1200, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% Polyester', 'pWeight' => '145',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第三個產品結尾
      //第四個產品
      $image2 = "https://www.blackdiamondequipment.com.tw/upload/products_photo/photo_big/b1561701217326312.jpg";

      $album2 = "https://www.blackdiamondequipment.com.tw/upload/products_photo/photo_big/b1561701217326312.jpg,
              https://www.blackdiamondequipment.com.tw/upload/products_photo/photo_big/b1561701221326376.jpg,
              https://www.blackdiamondequipment.com.tw/upload/products_photo/photo_big/b1561701225326172.jpg";

      $intro2 = "商品編號<br>
                1200007002014<br>
               銷售重點<br>
               * 2019年短袖上衣材質全面升級<br>
               * 選用對環境友善的精梳有機棉<br>
               * 直徑小的棉纖維交織出滑順舒適的T-shirt<br>
               * 145g 超輕薄適合台灣夏季炎熱氣候<br>
               * 今夏最完美的 T-shirt 值得您擁有<br>
               * 96% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'asdasq-PRBZ', 'pName' => 'Black Diamond  EUIPMENT TEE 短袖上衣',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Black Diamond', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 1200, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '96% Polyester', 'pWeight' => '145',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第四個產品結尾
      //第五個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745228/0/151120?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745228/0/151120?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745228/1/151120?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745228/2/151120?v=1";

      $intro2 = "商品編號<br>
              5745228<br>
              銷售重點<br>
              * F19男連帽上衣灰色<br>
              * 抽繩可調節帽子<br>
              * 袋鼠口袋<br>
              * 80% Cotton<br>
              * 20% Polyester<br>";

      $production2 = Production::create([
          'pNo' => 'UJO16000', 'pName' => 'Columbia 哥倫比亞 男款 - LOGO連帽長袖上衣 CSC Basic Logo II Hoodie',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '保暖,時尚,熱門商品,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 1640, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '80% Cotton, 20% Polyester', 'pWeight' => '180',
          'pComment' => $faker->realText(),
          'pCupon_title' => '五折優惠',
          'pCupon_price' => 3280,
      ]);

      //第五個產品結尾
      //第六個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5378222/0/122917?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5378222/0/122917?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5378222/1/122917?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePageSKU/16008156/0/151433?v=1";

      $intro2 = "商品編號<br>
              5378222<br>
              銷售重點<br>
              * Omni-Wick™ 快排速乾 快排快乾<br>
              * Omni-SHADE™ UPF 30科技防曬<br>
              * 四向彈性<br>
              * 88% Cotton<br>
              * 12% Polyester<br>";

      $production2 = Production::create([
          'pNo' => 'UAM04330', 'pName' => 'Columbia 哥倫比亞 男款 - 防曬UPF30快排長袖襯衫 Triple Canyon Solid Long Sleeve Shirt',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '保暖,時尚',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 3180, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '88% Cotton, 12% Polyester', 'pWeight' => '170',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第六個產品結尾
      //第七個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5302496/0/141335?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5302496/0/141335?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5302496/1/141335?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5302496/2/141335?v=1";

      $intro2 = "商品編號<br>
              5302496<br>
               銷售重點<br>
               * Omni-Wick 快排速乾<br>
               * Omni-Shade UPF 50 防曬<br>
               * 捲袖繫帶<br>
               * 100% Nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UAE06490', 'pName' => 'Columbia 哥倫比亞 男款- 防曬UPF50快排長袖襯衫 Silver Ridge 2.0 Plaid L/S Shirt',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '保暖,時尚,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 3580, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% Nylon', 'pWeight' => '170',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第七個產品結尾
      //第八個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4994182/0/151119?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4994182/0/151119?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4994182/1/151119?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4994182/3/151119?v=1";

      $intro2 = "商品編號<br>
              4994182<br>
               銷售重點<br>
               * Omni-Wick™ 吸濕快排<br>
               * Omni-Shade™ 長效抗UV科技，防曬係數 UPF 30<br>
               * 百搭實穿的格子襯衫<br>
               * 具有Omni-Wick 快排以及Omni-Shade UPF 30 防曬兩樣科技<br>
               * 領口防曬領片，袖子內側有捲袖固定繫帶<br>
               * 100% Nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UAE744100', 'pName' => 'Columbia哥倫比亞 男款-Omni-SHADE防曬抗UV30快排長袖襯衫',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '保暖,時尚,熱門商品,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 1490, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% Nylon', 'pWeight' => '170',
          'pComment' => $faker->realText(),
          'pCupon_title' => '五折優惠',
          'pCupon_price' => 2980,
      ]);

      //第八個產品結尾
      //第九個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745289/0/151214?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745289/0/151214?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745289/3/151214?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745289/6/151214?v=1";

      $intro2 = "商品編號<br>
              5745289<br>
              銷售重點<br>
              * Omni-HEAT™ 鋁點保暖科技<br>
              * 可套接式設計<br>
              * 防潑水抗小雨<br>
              *  700 fill power 羽絨<br>
              * 內附安全暗袋<br>
              * 下擺可調整式拉繩<br>
              * 100% polyester<br>";

      $production2 = Production::create([
          'pNo' => 'UWE15210', 'pName' => 'Columbia 哥倫比亞 男款-Omni-HEAT 鋁點保暖羽絨外套黑色 Cascade Peak II Jacket',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '外套',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 7880, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% Polyester', 'pWeight' => '190',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第九個產品結尾
      //第十個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745217/0/123057?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745217/0/123057?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745217/3/123057?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745217/4/123057?v=1";

      $intro2 = "商品編號<br>
              5745217<br>
              銷售重點<br>
              * Omni-HEAT™ 鋁點保暖科技<br>
              * Omni-SHIELD™極度防潑抗污科技<br>
              * 雙向彈力拉伸<br>
              * 防潑水抗小雨<br>
              * 下擺可調整式拉繩<br>
              * 袖尾有拇指孔<br>
              * 93% polyester , 7% elastane<br>";

      $production2 = Production::create([
          'pNo' => 'UEE02480', 'pName' => 'Columbia 哥倫比亞 男款- Omni-Shield 防潑鋁點保暖軟殼外套 Titan Ridge  2.0 Hybrid Jacket',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '外套',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水,熱門商品,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 5584, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '93% polyester , 7% elastane', 'pWeight' => '190',
          'pComment' => $faker->realText(),
          'pCupon_title' => '八折優惠',
          'pCupon_price' => 6980,
      ]);

      //第十個產品結尾
      //第十一個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745297/0/151225?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745297/0/151225?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745297/2/151225?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745297/3/151225?v=1";

      $intro2 = "商品編號<br>
               5745297<br>
               銷售重點<br>
               * Omni-Tech科技防水，同時兼具透氣舒適<br>
               * 內附安全暗袋<br>
               * 下擺可調整式拉繩<br>
               * 60% Polyester, 40% Acrylic<br>";

      $production2 = Production::create([
          'pNo' => 'UWO12460', 'pName' => 'Columbia 哥倫比亞 男款- Omni-Tech 防水外套 South Canyon Lined Jacket ',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '外套',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 7980, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '60% Polyester, 40% Acrylic', 'pWeight' => '190',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第十一個產品結尾
      //第十二個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745284/0/151210?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745284/0/151210?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745284/2/151210?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745284/4/151210?v=1";

      $intro2 = "商品編號<br>
                5745284<br>
                銷售重點<br>
                * Omni-Tech科技防水，同時兼具透氣舒適<br>
                * Omni-HEAT™ 鋁點保暖科技<br>
                * 拉鍊拆換內裡<br>
                * 腋下透氣<br>
                * 滑雪證專用口袋<br>
                * 內附安全暗袋<br>
                * 護目鏡專用內袋<br>
                * 下擺可調整式拉繩<br>
                * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UWE11550', 'pName' => 'Columbia哥倫比亞 男款- Omni-TECH 兩件式防水鋁點保暖外套 Timberturner Jacket ',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '外套',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水,熱門商品,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 9440, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '190',
          'pComment' => $faker->realText(),
          'pCupon_title' => '五折優惠',
          'pCupon_price' => 11800,
      ]);

      //第十二個產品結尾
      //第十三個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6071358/0/141835?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6071358/0/141835?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6071358/2/141835?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6071358/8/141835?v=1";

      $intro2 = "商品編號<br>
                 6071358<br>
                 銷售重點<br>
                 * DryVent防水透氣材質<br>
                 * 可收納式連帽設計<br>
                 * 雙層口袋結構，便捷實用<br>
                 * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => '4979ZBV', 'pName' => 'The North Face北面男款米色防水透氣衝鋒衣',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'The North Face', 'pType' => '外套',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 9380, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '190',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第十三個產品結尾
      //第十四個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6108780/1/141732?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6108780/1/141732?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6108780/2/141732?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6108780/3/141732?v=1";

      $intro2 = "商品編號<br>
                 6108780<br>
                  銷售重點<br>
                  * WindWall防風材質<br>
                  * 可收納式連帽，穿法隨心變換<br>
                  * 雙向拉鍊門襟，靈活開闔<br>
                  * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => '497HPG2', 'pName' => 'The North Face北面男款米色防潑水長版防風外套',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'The North Face', 'pType' => '外套',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水,熱門商品,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 3190, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '190',
          'pComment' => $faker->realText(),
          'pCupon_title' => '五折優惠',
          'pCupon_price' => 6380,
      ]);

      //第十四個產品結尾
      //第十五個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6120468/0/141959?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6120468/0/141959?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6120468/2/141959?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6120468/3/141959?v=1";

      $intro2 = "商品編號<br>
                  6120468<br>
                  銷售重點<br>
                  * FUTURELIGHT防水透氣<br>
                  * 防護性連帽，為頭部提供溫暖呵護<br>
                  * 腋下拉鍊設計，運動時更透氣舒適<br>
                  * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => '4R5170M', 'pName' => 'The North Face北面男女款黃色1990MountainJacket衝鋒衣',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'The North Face', 'pType' => '外套',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 17880, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '190',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第十五個產品結尾
      //第十六個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6277991/0/112020?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6277991/0/112020?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6277991/2/112020?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6277991/5/112020?v=1";

      $intro2 = "商品編號<br>
                  6277991<br>
                  銷售重點<br>
                  * Omni-Shade™ UPF 50 科技防曬<br>
                  * Omni-Wick™ 快排速乾<br>
                  * 可調整式腰帶<br>
                  * 褲檔活動剪裁<br>
                  * 表布Ripstop 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UAM40840', 'pName' => 'Columbia 哥倫比亞 男款 - UPF50快排短褲 Silver Ridge  Cargo Short',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '褲子',
          'pSex' => '男', 'pTag' => '時尚,防水,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 2280, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '表布Ripstop 100% nylon', 'pWeight' => '140',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第十六個產品結尾
      //第十七個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6277284/0/184944?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6277284/0/184944?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6277284/1/184944?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6277284/5/184944?v=1";

      $intro2 = "商品編號<br>
              6277284<br>
                   銷售重點<br>
                   * Omni-Shade™ UPF 50 科技防曬<br>
                   * Omni-Wick™ 快排速乾<br>
                   * 彈性腰圍<br>
                   * 可調整式腰帶<br>
                   * 兩截褲設計<br>
                   * 褲檔活動剪裁<br>
                   * 直筒<br>
                   * 表布Ripstop 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UAM80040', 'pName' => 'Columbia 哥倫比亞 男款 - UPF50快排兩截褲 Silver Ridge  Convertible Pant',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '褲子',
          'pSex' => '男', 'pTag' => '時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 2980, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '表布Ripstop 100% nylon', 'pWeight' => '140',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第十七個產品結尾
      //第十八個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745156/0/122916?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745156/0/122916?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745156/1/122916?v=11,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745156/5/122916?v=1";

      $intro2 = "商品編號<br>
              5745156<br>
                   銷售重點<br>
                   * Omni-SHADE™ UPF 50 防曬<br>
                   * Omni-Wick™ 吸濕快排<br>
                   * 部分鬆緊腰頭，可用拉繩調整<br>
                   * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UAE80070', 'pName' => 'Columbia 哥倫比亞 男款 - 防曬UPF50快排長褲 Silver Ridge  Cargo Pant',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '褲子',
          'pSex' => '男', 'pTag' => '時尚,防水,熱門商品,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 2144, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '140',
          'pComment' => $faker->realText(),
          'pCupon_title' => '八折優惠',
          'pCupon_price' => 2680,
      ]);

      //第十八個產品結尾
      //第十九個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5407180/0/122856?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5407180/0/122856?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5407180/1/122856?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5407180/4/122856?v=1";

      $intro2 = "商品編號<br>
              5407180<br>
                    銷售重點<br>
                    * Omni-Wick™ 快排速乾快排速乾<br>
                    * Omni-Shade™ UPF 50 科技防曬<br>
                    * 內附可拆卸式腰帶<br>
                    * 腰部局部彈性設計<br>
                    * 膝蓋活動剪裁<br>
                    * 多口袋<br>
                    * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UAM80070', 'pName' => 'Columbia 哥倫比亞 男款 - UPF50快排長褲 Silver Ridge  Cargo Pant',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '褲子',
          'pSex' => '男', 'pTag' => '時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 2680, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '140',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第十九個產品結尾
      //第二十個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863626/0/123939?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863626/0/123939?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863626/2/123939?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863626/7/123939?v=1";

      $intro2 = "商品編號<br>
              5863626<br>
                    銷售重點<br>
                    * WimdWall防風布料<br>
                    * 附配套腰帶的舒適腰頭<br>
                    * 大腿部帶拉鍊口袋<br>
                    * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => '3VUZ21L', 'pName' => 'The North Face北面男款綠色防風防潑水戶外徒步褲',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'The North Face', 'pType' => '褲子',
          'pSex' => '男', 'pTag' => '時尚,防水,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 4880, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '140',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第二十個產品結尾
      //第二十一個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863627/0/000802?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863627/0/000802?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863627/2/000802?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863627/7/000802?v=1";

      $intro2 = "商品編號<br>
              5863627<br>
                    銷售重點<br>
                    * WimdWall防風布料<br>
                    * 附配套腰帶的舒適腰頭<br>
                    * 大腿部帶拉鍊口袋<br>
                    * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => '3VUZJK3', 'pName' => 'The North Face北面男款黑色防風防潑水戶外徒步褲',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'The North Face', 'pType' => '褲子',
          'pSex' => '男', 'pTag' => '時尚,防水,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 2440, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '140',
          'pComment' => $faker->realText(),
          'pCupon_title' => '五折優惠',
          'pCupon_price' => 4880,
      ]);

      //第二十一個產品結尾
      //第二十二個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419578/0/143700?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419578/0/143700?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419578/2/143700?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419578/3/143700?v=1";

      $intro2 = "商品編號<br>
              5419578<br>
                     銷售重點<br>
                     * 水壺袋附有彈性繫繩加強固定<br>
                     * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UUU12280', 'pName' => 'Columbia 哥倫比亞 中性- 2L腰包 Outdoor Adventure Lumbar Bag',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '配件',
          'pSex' => '男', 'pTag' => '時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 1980, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '140',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第二十二個產品結尾
      //第二十三個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419564/0/123054?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419564/0/123054?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419564/1/123054?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419564/2/123054?v=1";

      $intro2 = "商品編號<br>
              5419564<br>
                     銷售重點<br>
                     * 輕量減壓背帶<br>
                     * 可放置3L水袋<br>
                     * 背部後泡棉可增加舒適度與支撐性<br>
                     * 內附背包防雨套<br>
                     * 登山杖掛置條<br>
                     * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UUU12400', 'pName' => 'Columbia 哥倫比亞 中性- 38L後背包 Outdoor Adventure 38L Backpack',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '配件',
          'pSex' => '男', 'pTag' => '時尚,防水,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 7880, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '190',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第二十三個產品結尾
      //第二十四個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419528/0/123040?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419528/0/123040?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419528/1/123040?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5419528/0/123040?v=1";

      $intro2 = "商品編號<br>
              5419528<br>
                     銷售重點<br>
                     * YKK防水拉鍊<br>
                     * 可放置3L 水袋<br>
                     * 可放置15筆電<br>
                     * 防水/ 防潑水材質<br>
                     * 容量25L<br>
                     * 100% TPE<br>";

      $production2 = Production::create([
          'pNo' => 'UUU00590', 'pName' => 'Columbia 哥倫比亞 中性- 25L筆電後背包 Street Elite 25L Backpack',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '配件',
          'pSex' => '男', 'pTag' => '時尚,防水,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 3140, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% TPE', 'pWeight' => '190',
          'pComment' => $faker->realText(),
          'pCupon_title' => '五折優惠',
          'pCupon_price' => 6280,
      ]);

      //第二十四個產品結尾
      //第二十五個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5470650/0/122712?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5470650/0/122712?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5470650/1/122712?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5470650/2/122712?v=11";

      $intro2 = "商品編號<br>
              5470650<br>
                     銷售重點<br>
                     * 耐受溫度: 90°C<br>
                     * 100% TPE<br>";

      $production2 = Production::create([
          'pNo' => 'ULU02980', 'pName' => 'Columbia 哥倫比亞 中性- LOGO 450ML隨身水壺',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '配件',
          'pSex' => '男', 'pTag' => '時尚,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 980, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% TPE', 'pWeight' => '100',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第二十五個產品結尾
      //第二十六個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5470577/0/122709?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5470577/0/122709?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5470577/1/122709?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5470577/2/122709?v=1";

      $intro2 = "商品編號<br>
              5470577<br>
                     銷售重點<br>
                     * 350ml<br>
                     * 建議水溫 0-80攝氏度<br>
                     * 100% TPE<br>";

      $production2 = Production::create([
          'pNo' => 'ULU00800', 'pName' => 'Columbia 哥倫比亞 中性-LOGO 350ML隨身水壺',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '配件',
          'pSex' => '男', 'pTag' => '時尚,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 780, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% TPE', 'pWeight' => '100',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第二十六個產品結尾
      //第二十七個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6349871/0/173151?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6349871/0/173151?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6349871/2/173151?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6349871/9/173151?v=1";

      $intro2 = "商品編號<br>
              6349871<br>
                     銷售重點<br>
                     * FlashDry吸濕排汗帽圍<br>
                     * 舒適防護帽檐，硬挺有型<br>
                     * 可調節帽圍設計，靈活調節鬆緊<br>
                     * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => '3SHGJK3', 'pName' => 'The North Face北面男女款黑色防水透氣棒球帽',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'The North Face', 'pType' => '配件',
          'pSex' => '男', 'pTag' => '時尚',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 1780, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '100',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第二十七個產品結尾
      //第二十八個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745202/0/123045?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745202/0/123045?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745202/1/123045?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745202/2/123045?v=1";

      $intro2 = "商品編號<br>
              5745202<br>
                     銷售重點<br>
                     *  Omni-GRIP™ 大底加強抓地力，適應健走碎石地形<br>
                     * TechLite 輕量中底，提供支撐與舒適與最佳動能回饋<br>
                     * 中底透氣涼爽<br>
                     * OutDry防水透氣<br>
                     * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UBM46000', 'pName' => 'Columbia 哥倫比亞 男款- Outdry零滲透防水健走鞋 VENTRAILIA  3 LOW OUTDRY',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '鞋子',
          'pSex' => '男', 'pTag' => '時尚,防水,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 4704, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '120',
          'pComment' => $faker->realText(),
          'pCupon_title' => '八折優惠',
          'pCupon_price' => 5880,
      ]);

      //第二十八個產品結尾
      //第二十九個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745189/0/151822?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745189/0/151822?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745189/1/151822?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5745189/2/151822?v=1";

      $intro2 = "商品編號<br>
              5745189<br>
                       銷售重點<br>
                       * Omni-GRIP™ 大底加強抓地力，適應健走碎石地形<br>
                       * TechLite 輕量中底，提供支撐與舒適與最佳動能回饋<br>
                       * OutDry防水透氣<br>
                       * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UBL08290', 'pName' => 'Columbia 哥倫比亞 女款- 鈦 Outdry零滲透防水健走鞋PEAKFREAK X2 OUTDRY',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '鞋子',
          'pSex' => '女', 'pTag' => '時尚,防水,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 5880, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '120',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第二十九個產品結尾
      //第三十個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787258/0/151423?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787258/0/151423?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787258/3/151423?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787258/4/151423?v=1";

      $intro2 = "商品編號<br>
              4787258<br>
                       銷售重點<br>
                       * Omni-Tech 防水透氣<br>
                       * TechLite 輕量抗震中底，提供彈性支撐與動能回饋<br>
                       * Omni-Grip抓地力科技<br>
                       * 休閒鞋款，外型休閒年輕<br>
                       * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UBM59750', 'pName' => 'Columbia 哥倫比亞 男款-Omni-Tech防水保暖雪靴PEAKFREAK X2 OUTDRY',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '鞋子',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 5980, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '140',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第三十個產品結尾
      //第三十一個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787142/0/151418?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787142/0/151418?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787142/3/151418?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787142/4/151418?v=1";

      $intro2 = "商品編號<br>
              4787142<br>
                       銷售重點<br>
                       * Omni-Heat 科技保暖<br>
                       * Omni-Tech 防水透氣<br>
                       * TechLite 輕量中底，提供支撐與舒適與最佳動能回饋<br>
                       * Michelin® WINTER COMPOUND冰層抗滑，到零下30度仍能有效抓地<br>
                       * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UBM27710', 'pName' => 'Columbia 哥倫比亞 男款- OutDry防水保暖雪靴PEAKFREAK  X2 OUTDRY',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '鞋子',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 8980, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '150',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第三十一個產品結尾
      //第三十二個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787101/0/151208?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787101/0/151208?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787101/2/151208?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4787101/1/151208?v=1";

      $intro2 = "商品編號<br>
              4787101<br>
                       銷售重點<br>
                       * Omni-Heat 3D 全新保暖科技，比原OutDry更加強保暖續熱效果<br>
                       * OutDry 全防水零滲透<br>
                       * TechLite 輕量中底，提供支撐與舒適與最佳動能回饋<br>
                       * Michelin® WINTER COMPOUND冰層抗滑，到零下30度仍能有效抓地<br>
                       * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UBM59730', 'pName' => 'Columbia 哥倫比亞 男款- 鈦 OutDry防水保暖雪靴',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '鞋子',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 11800, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '160',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第三十二個產品結尾
      //第三十三個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4696663/0/151422?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4696663/0/151422?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4696663/2/151422?v=1,
              https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4696663/3/151422?v=1";

      $intro2 = "商品編號<br>
              4696663<br>
                        銷售重點<br>
                        * Outdry零滲透防水<br>
                        * Omni-Grip抓地力科技<br>
                        * Techlite輕量支撐科技<br>
                        * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UBM55300', 'pName' => 'Columbia哥倫比亞 男款-Outdry防水健走靴',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '鞋子',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 7480, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '160',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);
      //第三十三個產品結尾
      ////////////////////////////////////////////////
      //第三十四個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6272829/0/012240?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6272829/0/012240?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6272829/1/012240?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6272829/4/012240?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6272829/7/012240?v=1";

      $intro2 = "商品編號<br>
      6272829<br>
               銷售重點<br>
               * Omni-Shade UPF 40 科技防曬<br>
               * Omni-Wick 快排速乾<br>
               * 抗菌防臭處理<br>
               * 排熱透氣剪裁<br>
               * 表布100% polyester<br>";

      $production2 = Production::create([
          'pNo' => 'UFE71870', 'pName' => 'Columbia 哥倫比亞 男款-快排防曬40長袖襯衫粉紅格Super Tamiami LS Shirt',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '時尚,熱門',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 2980, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '表布100% polyester', 'pWeight' => '145',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第三十四個產品結尾
      //第三十五個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6261674/0/014940?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6261674/0/014940?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6261674/2/014940?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6261674/5/014940?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6261674/7/014940?v=1";

      $intro2 = "商品編號<br>
      6261674<br>
                     銷售重點<br>
                     * Omni-Shade™ UPF 40 科技防曬<br>
                     * Omni-Wick™ 快排速乾<br>
                     * 抗菌防臭處理<br>
                     * 排熱透氣剪裁<br>
                     * 表布100% polyester<br>";

      $production2 = Production::create([
          'pNo' => 'UAE15680', 'pName' => 'Columbia 哥倫比亞 男款-UPF40快排長袖襯衫 Silver Ridge Lite Long Sleeve Shirt',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '時尚,防水,特價,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 1824, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '表布100% polyester', 'pWeight' => '130',
          'pComment' => $faker->realText(),
          'pCupon_title' => '八折優惠',
          'pCupon_price' => 2280,
      ]);

      //第三十五個產品結尾
      //第三十六個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4868577/0/132350?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4868577/0/132350?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4868577/1/132350?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4868577/2/132350?v=1";

      $intro2 = "商品編號<br>
      4868577<br>
                     銷售重點<br>
                     * Omni-SHIELD™防潑抗污科技<br>
                     * 表布100% polyester<br>";

      $production2 = Production::create([
          'pNo' => 'UAJ04650', 'pName' => 'Columbia 哥倫比亞 男款-防潑長袖襯衫',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '時尚,防水,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 3904, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '表布100% polyester', 'pWeight' => '145',
          'pComment' => $faker->realText(),
          'pCupon_title' => '八折優惠',
          'pCupon_price' => 4880,
      ]);

      //第三十六個產品結尾
      //第三十七個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4714666/0/151155?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4714666/0/151155?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4714666/1/151155?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4714666/2/151155?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4714666/3/151155?v=1";

      $intro2 = "商品編號<br>
      4714666<br>
                     銷售重點<br>
                     * OMNI-WICK® 超吸濕快排<br>
                     * Omni-SHADE® 高效防紫外線<br>
                     * 表布100% polyester<br>";

      $production2 = Production::create([
          'pNo' => 'UAE05100', 'pName' => 'Columbia 哥倫比亞 男款-鈦 防曬50快排長袖上衣',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '時尚,特價,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 3104, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '表布100% polyester', 'pWeight' => '120',
          'pComment' => $faker->realText(),
          'pCupon_title' => '八折優惠',
          'pCupon_price' => 3880,
      ]);

      //第三十七個產品結尾
      //第三十八個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4619770/0/151118?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4619770/0/151118?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4619770/1/151118?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4619770/2/151118?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4619770/4/151118?v=1";

      $intro2 = "商品編號<br>
      4619770<br>
                     銷售重點<br>
                     * Omni-Wick™ 吸濕快排<br>
                     * Omni-Wick 快排科技，適合戶外活動，實穿好搭的格子襯衫<br>
                     * 表布100% polyester<br>";

      $production2 = Production::create([
          'pNo' => 'UAE11720', 'pName' => 'Columbia 哥倫比亞 男款-法蘭絨保暖快排襯衫',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '時尚,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 1824, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '表布100% polyester', 'pWeight' => '135',
          'pComment' => $faker->realText(),
          'pCupon_title' => '八折優惠',
          'pCupon_price' => 2280,
      ]);

      //第三十八個產品結尾
      //第三十九個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4577107/0/151128?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4577107/0/151128?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4577107/1/151128?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4577107/2/151128?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4577107/3/151128?v=1";

      $intro2 = "商品編號<br>
      4619770<br>
                     銷售重點<br>
                     * Omni-Wick™ 吸濕快排<br>
                     * Omni-Shade™ 長效抗UV科技<br>
                     * 防曬係數 UPF30<br>
                     * 彈性舒適面料<br>
                     * 抗菌處理可抑制細菌滋生產生異味<br>
                     * 衣袖可收捲固定<br>
                     * 拉鍊內藏式口袋<br>
                     * 附有太陽眼鏡擦拭布<br>
                     * 表布100% polyester<br>";

      $production2 = Production::create([
          'pNo' => 'UAE12740', 'pName' => 'Columbia哥倫比亞 男款-鈦 快排防曬UPF30 長袖休閒襯衫',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '上衣',
          'pSex' => '男', 'pTag' => '時尚,特價',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 3184, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '表布100% polyester', 'pWeight' => '135',
          'pComment' => $faker->realText(),
          'pCupon_title' => '八折優惠',
          'pCupon_price' => 3980,
      ]);

      //第三十九個產品結尾
      //第四十個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4995033/0/151530?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4995033/0/151530?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4995033/1/151530?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/4995033/3/151530?v=1";

      $intro2 = "商品編號<br>
      4995033<br>
                 銷售重點<br>
                 * Omni-TECH™科技防水，同時兼具透氣舒適<br>
                 * Omni-Heat™更強蓄熱保暖效果<br>
                 * 科技纖維填充，更加保暖<br>
                 * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UWO09260', 'pName' => 'Columbia 哥倫比亞 男款 Omni-TECH防水鋁點保暖外套',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'Columbia', 'pType' => '外套',
          'pSex' => '男', 'pTag' => '保暖,時尚,防水,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 8280, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '190',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第四十個產品結尾
      //第四十一個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5780425/0/104055?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5780425/0/104055?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5780425/2/104055?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5780425/3/104055?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5780425/8/104055?v=1";

      $intro2 = "商品編號<br>
      5780425<br>
                 銷售重點<br>
                 * WindWall耐久防風<br>
                 * 局部抓絨背襯<br>
                 * 落尾下擺，自如隨心<br>
                 * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => 'UWO09260', 'pName' => 'The North Face北面男款灰色輕量風衣',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'The North Face', 'pType' => '外套',
          'pSex' => '男', 'pTag' => '保暖,時尚,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 6380, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '150',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第四十一個產品結尾
      //第四十二個產品
      $image2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863606/0/000603?v=1";

      $album2 = "https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863606/0/000603?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863606/2/000603?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5780425/3/104055?v=1,
      https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/5863606/8/000603?v=1";

      $intro2 = "商品編號<br>
      5863606<br>
                 銷售重點<br>
                 * DWR防潑水梭織布料<br>
                 * 帶袋蓋便捷插手袋<br>
                 * 腋下透氣拉鍊設計<br>
                 * 100% nylon<br>";

      $production2 = Production::create([
          'pNo' => '3LZ9G2Y', 'pName' => 'The North Face北面男款綠色防潑水衝鋒衣',
          'pPhoto' => $image2,
          'pAlbum' => $album2,
          'pDate' => \Carbon\Carbon::now(),
          'pBrand' => 'The North Face', 'pType' => '外套',
          'pSex' => '男', 'pTag' => '保暖,時尚,熱門商品',
          'pRating' => 5,
          'pComntNum' => 1,
          'pComntRatingNum' => 5, 'pState' => '充足',
          'pPrice' => 10380, 'pSize' => 'XL,L,M,S', 'pIntro' => $intro2,
          'pPlace' => $faker->country,
          'pMaterial' => '100% nylon', 'pWeight' => '170',
          'pComment' => $faker->realText(),
          'pCupon_title' => null,
          'pCupon_price' => null,
      ]);

      //第四十二個產品結尾
    }

}
