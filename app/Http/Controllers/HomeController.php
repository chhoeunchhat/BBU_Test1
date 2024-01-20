<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $homes=HomeModel::all();
        return dd($homes);
        // return view('home');
    }
    // public function product(){
    //     return view('product');
    // }
    // public function category(){
    //     return view('category');
    // }
}
