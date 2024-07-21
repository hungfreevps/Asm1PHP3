<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorys')->insert([
            ['cate_name'=>'Bóng Đá'],
            ['cate_name'=>'Bóng Chuyền'],
            ['cate_name'=>'Bóng Rổ'],
        ]);
    }
}
