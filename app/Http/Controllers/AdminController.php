<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');

    }
    public function insertProduct(Request $r){
        if($r->method()=="POST"){
           $data = $r->validate([
                'p_title'=>'required',
                'brand'=>'required',
                'price'=>'required',
                'discount_price'=>'required',
                'description'=>'required',
                'category'=>'required',
                'image'=>'required'
            ]);
            $filename = $r->image->getClientOriginalName();
            $r->image->move(public_path("photos"),$filename);
            $p = new  Product();
            $p->p_title = $r->p_title;
            $p->p_brande = $r->brand;
            $p->p_price = $r->price;
            $p->discount_price = $r->discount_price;
            $p->category_id = $r->category_id;
            $p->image = $r->image;
        

            Product::create($validateData);
            return redirect()->back();
        }
        return view("admin.insertProduct",["categories"=>Category::all()]);

    }
    public function deletProduct($id){
        Product::find($id)->delete();
        return redirect()->back();
    }
    public function insertCategory(Request $r){
        $data = $r->validate([
            'title'=>'required'
        ]);
        $p = new Category();
        $p->title = $r->title;

        Category::create($validate);
        return redirect()->back();

    }
    public function product(){
        return view("admin.products")->with("products",Product::all());

    }
    public function category(){
        return view("admin.categories",["categories"=>Category::all()]);

    }
    public function deleteCategory($id){
        Category::find(id)->delete();
        return redirect()->back();
    }

    public function orders(){

    }
    public function address(){

    }
    public function coupon(){

    }
    public function users(){

    }
}
