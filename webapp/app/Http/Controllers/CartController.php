<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Giỏ hàng";

        // Xác định người dùng đã đăng nhập
        $user = Auth::user();

        if ($user) {
            $userID = $user->id;

            // Lấy sản phẩm mà người dùng đã đặt
            $carts = Cart::where('user_id', $userID)->get();

            foreach ($carts as $cart) {
                $product = $cart->product; // Lấy thông tin sản phẩm từ liên kết tới product_id
                $quantity = $cart->quantity;

                // Xử lý thông tin sản phẩm ở đây
                // Ví dụ: $product->name, $product->price, $quantity, ...
            }
            return view('page.cart', compact('title', 'carts'));
        } else {
           return redirect()->route('auth.login');
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::user()){
            $quantity = $request->input('quantity');
            $productId = $request->input('productId');
            $product = Product::find($productId);
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $productId;
            $cart->quantity = $quantity;
            $cart->save();
            echo '<pre>';
            print_r($product);
            echo '<pre>';

            dump($quantity);
            dump($product);
            return redirect()->route('home')->with('success','Thêm sản phẩm vào giỏ hàng');
        }
        else {
            return redirect()->route('auth.login')->with('error','Bạn cần đăng nhập để thực hiện');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
