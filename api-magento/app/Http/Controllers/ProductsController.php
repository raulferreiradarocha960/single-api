<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller
{
        public function index(){
            $products = Http::get("https://jsonplaceholder.typicode.com/posts");
            return json_decode($products, true);
        }
}
