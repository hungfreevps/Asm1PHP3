<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\client\Category;
use App\Models\client\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $data;
    public $loaitin_arr;
    public $viewProduct;
    public function __construct(){
        $this->data = new Home();
        $this->loaitin_arr = new Category();
        $this->viewProduct = new Home();
    }
    public function index(){
        $data = $this->data->getAllHome();
        $loaitin_arr = $this->loaitin_arr->getDM();
        $viewProduct = $this->viewProduct->getViewProduct();
        return view('client.index', ['data'=> $data, 'loaitin'=>$loaitin_arr, 'view'=>$viewProduct]);
    }
    public function chitiet($id){
        $loaitin_arr = $this->loaitin_arr->getDM();
        $tin = DB::table('products')->where('id', $id)->first();
        $data = ['id'=>$id, 'tin'=>$tin];
        return view('client.single-post', ['data'=> $data, 'loaitin'=>$loaitin_arr, 'tin'=>$tin]);
    }
}

