<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1つ目
        $params = [
            'photo' => 'https://www.fashion-press.net/img/news/25978/daikanyama_07.jpg',
            'name' => '店舗名',
            'opening_time' => '09:00',
            'closing_time' => '21:00',
            'price_range' => 1000
        ];
        $s = new Shop();
        $s->fill($params)->save();
    }
}
