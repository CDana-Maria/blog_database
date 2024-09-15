<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class SingleServiceController extends Controller
{
    public function index($id){
        $service= Service::find($id);
        return view('pages.single_service', ['service'=>$service]);
    }

     public function addToCart(Request $request)
{
    $service = $this->productRepository->findProductById($request->input('serviceId'));
    $options = $request->except('_token', 'serviceId', 'price', 'qty');

    Cart::add(uniqid(), $service->name, $request->input('price'), $request->input('qty'), $options);

    return redirect()->back()->with('message', 'Item added to cart successfully.');
}
}
