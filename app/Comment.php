<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function getRandomAvatar()
    {
        $faker = \Faker\Factory::create();
        //選頭像
        $choseAvatar = $faker->numberBetween(1, 10);
        $AvatarImg = "chose";

        if ($choseAvatar == 1) {
            $AvatarImg = "https://img.ltn.com.tw/Upload/news/600/2018/07/03/phpwdm1zT.jpg";
        } else if ($choseAvatar == 2) {
            $AvatarImg = "https://cdn0-t17.techbang.com/system/attached_images/2013/10/109960/original/e2c4966d88faa9dd806fe71195c20f54.jpg?1383107388";
        } else if ($choseAvatar == 3) {
            $AvatarImg = "https://en.pimg.jp/053/785/317/1/53785317.jpg";
        } else if ($choseAvatar == 4) {
            $AvatarImg = "https://i.pinimg.com/originals/bc/6a/1e/bc6a1ef4df180bb179a8121fc0c92ac6.jpg";
        } else if ($choseAvatar == 5) {
            $AvatarImg = "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR6_sRv51DHhvRrd5XWp1-0I6PB3m0zbSn3Ki5xZAG3mA93pKQK&usqp=CAU";
        } else if ($choseAvatar == 6) {
            $AvatarImg = "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSss7cv7eYmmSCkhITfxir3VZvcHRCAjS1fxZmBOdrxF_zFIvQ8&usqp=CAU";
        } else if ($choseAvatar == 7) {
            $AvatarImg = "https://i.imgflip.com/4/2wq27w.jpg";
        } else if ($choseAvatar == 8) {
            $AvatarImg = "https://i.imgflip.com/1m9jsb.jpg";
        } else if ($choseAvatar == 9) {
            $AvatarImg = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNgW5Xxwcmm46wG1ZBMy0-YZ7rVYuOL8LiGSRO4qCWNkq1ByGg5Q&s";
        } else if ($choseAvatar == 10) {
            $AvatarImg = "https://i1.wp.com/inews.gtimg.com/newsapp_bt/0/2798248132/641";
        }
        return $AvatarImg;
    }
    public function getAll(string $nNo)
    {
        return Comment::where('pNo', $nNo)->orderBy('created_at', 'desc')->get();
    }

    public function calRating(string $nNo)
    {
        $comments = Comment::where('pNo', $nNo)->get();
        if (count($comments) > 0) {
            //

            $avgRating = 0;
            foreach ($comments as $key) {
                $avgRating += $key->cRating;
            }
            if ($avgRating != 0) {
                $avgRating = $avgRating / $comments->count();
            } else {
                $avgRating = 0;
            }

            $avgRating = number_format($avgRating, 2);
            return $avgRating;
        } else {
            return 5;
        }
    }
}
