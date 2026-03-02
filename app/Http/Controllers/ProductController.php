<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProducts()
    {
        // Logic to retrieve products from the database
        // $products =DB::table('products')->orderBy('id','desc')->get();
        //$products =DB::table('products')->get();
        // $products =DB::table('products')
        //     ->select('id','name','description')
        //     ->orderBy('name','asc')
        //     ->get();
        //$products =DB::table('products')->where('id',4)->first();

        // For how many products we have in the database
        $products =DB::table('products')->count();
        return response()->json($products);
    }
}
