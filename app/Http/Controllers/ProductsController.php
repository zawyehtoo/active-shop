<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function detail($id)
    {   
        $sizes=Size::all();
        $colors=Color::all();
        $product=Product::find($id);
        return view('user_page.detail',compact('product','colors','sizes'));
    }
    public function store(Request $request,$id)
    {
        $userId=Auth::id();
        $order=new Order();
        $product=Product::find($id);
        $order->quantity=$request->input('quantity');
        $order->color_id=$request->input('color');
        $order->size_id=$request->input('size');
        $order->user_id=$userId;
        $order->product_id=$id;
        $order->total_price=$request->input('quantity')*$product->price;
        $order->save();
        return redirect()->route('cart');
    }
    public function showOrder()
    {
        $orders=Order::with('product','color','size','user')->get();
        $userId=Auth::id();
        $specific_orders=Order::where('user_id',$userId)->get();
        $totalprice=0;
        foreach ($specific_orders as $specific_order) {
            $totalprice += $specific_order->total_price;
        }
       
        return view('user_page.cart',compact('orders','totalprice'));
    }
    public function atLeastShow()
    {
        $products = Product::take(10)->get();
        return view('user_page.home',compact('products'));
    }
    public function edit($id)
    {
        $order = Order::with('product', 'color', 'size')->findOrFail($id);
        $sizes=Size::all();
        $colors=Color::all();
        $product=Product::find($id);
        return view('user_page.edit',compact('order','sizes','colors','product'));
    }
    public function update(Request $request,$product_id,$order_id,)
    {
        $order=Order::find($order_id);
        $product=Product::find($product_id);
        $order->quantity=$request->input('quantity');
        $order->color_id=$request->input('color');
        $order->size_id=$request->input('size');
        $order->product_id=$product_id;
        $order->total_price=$request->input('quantity')*$product->price;
        $order->update();
        return redirect()->route('cart');
    }
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->back();
    }
    public function storeProducts(Request $request)
    {
        $product=new Product();
        $product->title=$request->input('title');
        $product->description=$request->input('description');
        $product->category_id=$request->input('category');
        $product->price=$request->input('price');
        $product->men=$request->input('men');
        $product->women=$request->input('women');
        $product->kids=$request->input('kids');
        if($request->hasFile('image')){
            $destination_path='public/images';
            $image=$request->file('image');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('image')->storeAs($destination_path,$image_name);
            $product->image=$image_name;
        }
        $product->save();
        return redirect()->route('showproducts');
    }
    public function productList()
    {
        $products=Product::with('category')->get();
        return view('admin_panel.product_list',compact('products'));
    }
    public function editProduct($id)
    {
        $product=Product::with('category')->findOrFail($id);
        $categories=Category::all();
        return view('admin_panel.edit_products',compact('product','categories'));
    }
    public function updateProduct(Request $request,$id)
    {
        $product=Product::find($id);
        $product->title=$request->input('title');
        $product->description=$request->input('description');
        $product->category_id=$request->input('category');
        $product->price=$request->input('price');
        $product->men=$request->input('men');
        $product->women=$request->input('women');
        $product->kids=$request->input('kids');
        $product->update();
        return redirect()->route('showproducts');

    }
    public function delete($id)
    {
        $product=Product::find($id);
        $product->is_deleted=1;
        $product->update();
        return redirect()->route('showproducts');
    }
    public function AdminOrder()
    {
        $orders=Order::with('product','color','size','user')->get();
        return view('admin_panel.orders',compact('orders'));
    }
    public function isConfirmed($id)
    {
        $order=Order::find($id);
        $order->is_confirmed=1;
        $order->update();
        return redirect()->route('orders');
    }
    public function showCustomer()
    {
        $customers=User::all();
        return view('admin_panel.customer',compact('customers'));
    }
}
