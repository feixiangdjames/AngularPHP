<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Wdogseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert(
            [ 'name'=>'category-A','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')]);

        DB::table('category')->insert(
            ['name'=>'category-B','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')]);

        DB::table('category')->insert(
            ['name'=>'category-C','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')]);

        DB::table('pets')->insert(
            [
                'title'=>'Runtime',
                'price'=> 95.30,
                'category_id'=>1,
                'rate'=> 4,
                'img'=>'https://material.angular.io/assets/img/examples/shiba2.jpg',
                'description'=>'he dog was the first species to be domesticated by hunter–gatherers more than 15,000 years ago, which predates agriculture. Their long association with humans has led dogs to be uniquely attuned to human behavior and they can thrive on a starch-rich diet that would be inadequate for other canids.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
    }
}
