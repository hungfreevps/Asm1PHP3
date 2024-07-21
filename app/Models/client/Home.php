<?php

namespace App\Models\client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;
    public function getAllHome(){
        $data = DB::table('products')
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get();
        return $data;
    }
    public function getViewProduct(){
        $viewProduct = DB::table('products')
        ->orderBy('view', 'desc')
        ->limit(3)
        ->get();
        return $viewProduct;
    }
    public function getChiTiet($id){
        $data = DB::table('products')
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get();
        return $data;
    }
}
