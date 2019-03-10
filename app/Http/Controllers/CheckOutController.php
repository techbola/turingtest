<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckOutController extends Controller
{

    public function makePayment(Request $request)
    {
        $categories = Category::all();

        $this->validate($request, [

            'name' => 'required|min:3|string',
            'phone' => 'required|numeric',
            'address' => 'required|min:3|string',
            'email' => 'required|email',

        ]);

        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $email = $request->email;

        return view('front.payment')->with([
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'email' => $email,
            'categories' => $categories
        ]);
    }

    public function checkout(Request $request)
    {
        $categories = Category::all();

        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
        );

        Mail::send('emails.order', $data, function ($msg) use ($data)
        {

            $msg->from($data['email']);

            $msg->to('support@techbolashop.com');

            $msg->subject('New Order From Website');

        });

        Session::flash('success', 'Your Order has been made, We would get back to you soon. Thanks');

        Cart::destroy();

        return view('front.thankyou')->with([
            'categories' => $categories
        ]);
    }

}
