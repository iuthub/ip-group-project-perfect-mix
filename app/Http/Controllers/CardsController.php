<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\OrderProcess;
use App\OrderHistory;
use Illuminate\Support\Facades\Auth;

class CardsController extends Controller
{
    public function getCard(){
    	return view('card');
    }

    public function addToCart(Request $request)
    {
    	$id=$request->input('id');
        $food = Food::find($request->input('id'));
 
        if(!$food) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                    	'id' => $food->id,
                        'name' => $food->name,
                        'quantity' => $request->input('quantity'),
                        'price' => $food->price,
                        'photo' => $food->photo_path
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']=$cart[$id]['quantity']+$request->input('quantity');
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
        	"id" => $food->id,
            "name" => $food->name,
            "quantity" => $request->input('quantity'),
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
 
    public function delete(Request $request)
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

    public function checkoutOrder(Request $request){

    	$user_id = Auth::user()->id;
    	$total = 0;
    	foreach(session('cart') as $id => $details)
    	{
			$food = Food::find($details['id']);
			$order = new OrderProcess ([
	            'user_id' => $user_id,
	            'food_id' => $food->id,
	            'quantity' => $details["quantity"],
	        ]);
	        $order->save();
	        $total += $details['price'] * $details['quantity'];
    	}

    	

    	$user = Auth::user();
        $orderHistory = OrderProcess::all();
        session()->put('cart', '');
        return redirect()->route('dashboardIndex')->with([
            'info'=>'Successfully updated!']);

    }


}
