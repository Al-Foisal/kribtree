<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller {
    public function cart() {
        $data          = [];
        $data['carts'] = $carts = Cart::content();

        // $total             = 0;

//calculating total price without discount and additional charge
        // foreach ($carts as $charge) {
        //     $total += $charge->price * $charge->qty;
        // }

        $data['total']             = Cart::subtotal();
        // $data['subtotal']          = $subtotal          = Cart::subtotal();
        // $data['discount']          = $discount          = $total - $subtotal;
        // $data['paid_amount']       = ($subtotal + $additional_charge) - $discount;

        // Session::put(['paid_amount' => $data['paid_amount']]);
        // if (session()->has('coupon')) {
        //     // $data['subtotal'] = $subtotal - Session::get('coupon')['discount'];
        //     $data['paid_amount'] = ($subtotal + $additional_charge) - ($discount + Session::get('coupon')['discount']);
        //     Session::put(['paid_amount' => $data['paid_amount']]);

        // }

        return view('frontend.pages.cart', $data);
    }

    public function addToCart(Request $request) {
        $data                     = [];
        $product                  = Product::where('id', $request->id)->first();
        $data['id']               = $product->id;
        $data['name']             = $product->name;
        $data['qty']              = 1;
        $data['price']            = $product->price;
        $data['weight']           = 1;
        $data['options']['image'] = $product->image;

        Cart::add($data);

        return response()->json([
            'status'       => 'success',
            'cart_count'   => Cart::count(),
            'cart_content' => Cart::content(),
        ]);
    }

    public function updateCart(Request $request) {
        $row = [];

        foreach ($request->row_id as $key => $row) {
            $rowId = $row;
            $qty   = $request->quantity[$key];
            Cart::update($rowId, $qty);
        }

        return redirect()->back()->withToastSuccess('Cart updated successfully!!');
    }

    public function removeFromCart($rowId) {
        Cart::remove($rowId);

        return redirect()->back()->withToastSuccess('product remove from cart successfully!!');
    }

    public function destroyCart() {
        Cart::destroy();

        return redirect()->back()->withToastSuccess('Cart destroyed successfully!!');
    }

    //coupon
    public function applyCoupon(Request $request) {
        $coupon_code = $request->coupon_code;

        $check = Coupon::where('coupon_code', $coupon_code)->first();

        if ($check->coupon_date <= today()) {
            return redirect()->back()->withToastError('Coupon Date Has Been Expaired!!');
        }

        if ($check->coupon_type == 1) {
            Session::put('coupon', [
                'code'     => $check->coupon_code,
                'discount' => ceil((Cart::subtotal() * $check->coupon_discount) / 100),
            ]);
        } else
        if ($check->coupon_type == 2) {
            Session::put('coupon', [
                'code'     => $check->coupon_code,
                'discount' => $check->coupon_discount,
            ]);

        }

        return redirect()->back()->withToastSuccess('Coupon Applied Successfully!!');
    }

    public function removeCoupon() {
        Session::forget('coupon');

        return redirect()->back()->withToastSuccess('Coupon Removed Successfully!!');
    }

    public function addshippingCharge(Request $request) {
        Session::put(['ship' => $request->ship]);
        $total = Session::get('paid_amount') + $request->ship;

        return response()->json(['status' => 'success', 'total' => $total]);
    }

}
