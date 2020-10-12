<?php

namespace Database\Seeders;

use App\Models\Goods;
use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1つ目
        $param = [
            'name' => 'クラシックホットチョコレート',
            'price' => '650',
            'description'=> 'コク深く、なめらかな味わいの70%ダークチョコレートを、ミルクで仕上げました。'
        ];
        $goods = new Goods();
        $goods->fill($param)->save();

        // 2つ目
        $param = [
            'name' => 'スパイシーホットチョコレート',
            'price' => '650',
            'description'=> '厳選したカカオを使用したホットチョコレート。チポレチリ、シナモン、ナツメグなど、7種類のスパイスが入った刺激的な癖になるお味。'
        ];
        $goods = new Goods();
        $goods->fill($param)->save();

    }
}
