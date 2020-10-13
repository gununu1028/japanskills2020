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
            'photo' => 'http://skilljapan.info/images/shop.png',
            'name' => 'クラシックホットチョコレート',
            'price' => '650',
            'description'=> 'コク深く、なめらかな味わいの70%ダークチョコレートを、ミルクで仕上げました。'
        ];
        $i = new Item();
        $i->fill($param)->save();
    }
}
