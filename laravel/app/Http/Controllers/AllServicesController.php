<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AllServicesController extends Controller
{
    public function index()
    {    
        $all=Service::whereNotNull('description')
        ->orderBy('description', 'asc')->get();
      
         return view('pages.all_products', ['all'=>$all]);
    }

    public function __construct(){
        $this->middleware('auth');
    }

    public function store(Request $request){
        $current_user = auth()->user();
        $service_id = $request->service_id;
        $quantity=1;
        $service  = Service::find($service_id)->first();


    }

      public function addToCart(Request $request)
{
    $service = $this->productRepository->findProductById($request->input('serviceId'));
    $options = $request->except('_token', 'serviceId', 'price', 'qty');

    Cart::add(uniqid(), $service->name, $request->input('price'), $request->input('qty'), $options);

    return redirect()->back()->with('message', 'Item added to cart successfully.');
}
}
