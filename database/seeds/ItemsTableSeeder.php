<?php

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
        DB::table('items')->insert([
            'name' => '冷蔵庫',
            'price' => 1000,
            'description' => 'サンプル商品１',
            'img' => '',
            'category_id' => null,
        ],[
            'name' => '商品2',
            'price' => 2500,
            'description' => 'サンプル商品２',
            'img' => '',
            'category_id' => null,
        ]);
    }
}
