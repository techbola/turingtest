<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontEndController extends Controller
{

    public function index()
    {
        $products = Product::take(16)->latest()->get();
        $categories = Category::all();
    	return view('front.index')->with([
    	    'products' => $products,
            'categories' => $categories
        ]);
    }

    public function shop()
    {
        $products = Product::latest()->paginate(12);
        $categories = Category::all();
        return view('front.shop')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function category($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        $products = Product::where('category_id', $id)->paginate(12);

        return view('front.category')->with([
            'products' => $products,
            'category' => $category,
            'categories' => $categories
        ]);
    }

    public function product($id)
    {

        $product = Product::find($id);
        $categories = Category::all();

        return view('front.product')->with([
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function contact()
    {
        $categories = Category::all();
        return view('front.contact')->with([
            'categories' => $categories
        ]);
    }

    public function contactStore(Request $request)
    {

        $this->validate($request, [

            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'contact_message' => 'required'

        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'contact_message' => $request->contact_message
        );

        Mail::send('emails.contact', $data, function ($msg) use ($data)
        {

            $msg->from($data['email']);

            $msg->to('support@techbolashop.com');

            $msg->subject($data['subject']);

        });

        Session::flash('success', 'Message Delivered, We would get back to you soon. Thanks');

        return redirect()->back();

    }

    public function checkout()
    {
        $categories = Category::all();
        return view('front.checkout')->with([
            'categories' => $categories
        ]);
    }

    public function search_results(Request $request)
    {
        $this->validate($request, [

            'search_query' => 'required|string'

        ]);

        $search_query = "%".$request->search_query."%";

        $products = Product::query()->whereRaw("(name like ? OR description like ?)", [$search_query, $search_query])
            ->latest()->paginate(12);

        $categories = Category::all();

        return view('front.search_results')->with([
            'categories' => $categories,
            'products' => $products
        ]);

    }

}
