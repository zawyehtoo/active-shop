<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function shopCategory()
    {
        $categories=Category::with('product')->get();
        $products=Product::with('category')->get();
        return view('user_page.shop',['categories'=>$categories,'products'=>$products]);
    }
    public function menCategory()
    {
        $categories=Category::all();
        $products=Product::where('men',1)->get();
        return view('user_page.men_shop',compact('categories','products'));
    }
    public function womenCategory()
    {
        $categories=Category::all();
        $products=Product::where('women',1)->get();
        return view('user_page.women_shop',compact('categories','products'));
    }
    public function kidsCategory()
    {
        $categories=Category::all();
        $products=Product::where('kids',1)->get();
        return view('user_page.kids_shop',compact('categories','products'));
    }
    public function showAllProducts(string $id)
    {
        $categories=Category::all();
        $products=Product::where('category_id',$id)->get();
        return view('user_page.shop',compact('products','categories'));
    }
    public function showMenProducts(string $id)
    {
        $categories=Category::all();
        $products=Product::where('category_id',$id)->where('men',1)->get();
        return view('user_page.men_shop',compact('products','categories'));
    }
    public function showWomenProducts(string $id)
    {
        $categories=Category::all();
        $products=Product::where('category_id',$id)->where('women',1)->get();
        return view('user_page.women_shop',compact('products','categories'));
    }
    public function showKidsProducts(string $id)
    {
        $categories=Category::all();
        $products=Product::where('category_id',$id)->where('kids',1)->get();
        return view('user_page.kids_shop',compact('products','categories'));
    }
    public function add()
    {
        $categories=Category::all();
        return view('admin_panel.add_products',compact('categories'));
    }
}
