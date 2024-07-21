<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['pro_name'=>'Bóng Đá U19', 'pro_image'=>'null', 'content'=>'Đá Hay', 'days'=>'2024-05-07', 'view'=>'120', 'pro_id_cate'=>'1'],
        ]);
    }
}
