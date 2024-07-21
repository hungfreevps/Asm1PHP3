<?php

namespace App\Models\client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    public function getDM(){
        $loaitin_arr = DB::table('categorys')->select('id', 'cate_name')
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get();
        return $loaitin_arr;
    }
}
