<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServByPriceController extends Controller
{
    public function index(){
        $price=Service::whereNotNull('price')
        ->orderBy('price', 'asc')->get();

        return view('pages.serv_by_price', ['price'=> $price]);
    }
}
