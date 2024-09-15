<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class PopularController extends Controller
{
    public function index(){
        $products = Service::distinct('total_bought')
        ->orderBy('total_bought', 'desc')->limit(4)->get();

        $latest = Service::whereNotNull('updated_at')
        ->orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.home_page', ['products'=>$products, 'latest'=>$latest]);

        
    }
}
