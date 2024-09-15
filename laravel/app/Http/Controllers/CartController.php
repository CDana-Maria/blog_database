<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function getCart()
    {
        return view('pages.cart');
    }

    public function addToCart(Request $request)
{
    $service = $this->productRepository->findProductById($request->input('serviceId'));
    $options = $request->except('_token', 'serviceId', 'price', 'qty');

    Cart::add(uniqid(), $service->name, $request->input('price'), $request->input('qty'), $options);

    return redirect()->back()->with('message', 'Item added to cart successfully.');
}

public function removeItem($id)
{
    Cart::remove($id);

    if (Cart::isEmpty()) {
        return redirect('/');
    }
    return redirect()->back()->with('message', 'Item removed from cart successfully.');
}

public function clearCart()
{
    Cart::clear();

    return redirect('/');
}
}