<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class CardsController extends Controller
{
    public function getCard(){
    	return view('card');
    }

    public function addToCart($id)
    {

        $food = Food::find($id);
 
        if(!$food) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $food->name,
                        "quantity" => 1,
                        "price" => $food->price,
                        "photo" => $food->photo_path
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $food->name,
            "quantity" => 1,
            "price" => $food->price,
            "photo" => $food->photo_path
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }


}
