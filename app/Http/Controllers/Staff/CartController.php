<?php

namespace App\Http\Controllers\Staff;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CartPostRequest;

class CartController extends Controller
{
    Public Function index(){
        $carts = Cart::all();

        return view('staff.cart', compact('carts'));
    }

    public function store(CartPostRequest $request)
    {
        $validated = $request->validated();

        Cart::create($validated);

        return redirect()->back()->with('Success', 'Product saved to cart');
    }
    
    public function destroy($id)
    {
        $carts = Cart::findOrFail($id);
        $carts->delete();
        
        return redirect()->back()->with('Success', 'Product removed from cart');
    }
}
