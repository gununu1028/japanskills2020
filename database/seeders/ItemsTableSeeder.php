<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
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
            'shop_id' => 1,
            'photo' => 'https://asahi-curation.s3.ap-northeast-1.amazonaws.com/wp-content/uploads/2019/02/15162001/z1902k18p01.jpg',
            'name' => 'クラシックホットチョコレート',
            'price' => '650',
            'description'=> 'コク深く、なめらかな味わいの70%ダークチョコレートを、ミルクで仕上げました。'
        ];
        $i = new Item();
        $i->fill($param)->save();
        
        // 2つ目
        $param = [
            'shop_id' => 1,
            'photo' => 'https://i.pinimg.com/originals/66/09/76/660976653156a32d3f273fa9ccc2f135.jpg',
            'name' => 'スパイシーホットチョコレート',
            'price' => '650',
            'description'=> '厳選したカカオを使用したホットチョコレート。チポレチリ、シナモン、ナツメグなど、7種類のスパイスが入った刺激的な癖になるお味。'
        ];
        $i = new Item();
        $i->fill($param)->save();
    }
}
