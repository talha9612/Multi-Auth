<?php

namespace App\Http\Controllers;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->get();
        $total = Product::count();
        return view('admin.product.home', compact(['products', 'total']));
    }
    public function index1(){
        $products = Product::orderBy('id','desc')->get();
        $total = Product::count();
        return view('user.product.home', compact(['products', 'total']));
    }
    public function create(){
        return view('admin.product.create');
    }
    public function save(Request $request){
        $validation = $request -> validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);
        $data = product::create($validation);
        if($data){
            session()->flash('Success', 'Product Added Successfully');
            return redirect(route('admin/products'));
        }
        else{
            session()->flash('errors', 'Some Problem Occurs');
            return redirect(route('admin/products/create'));
        }
    }
    public function edit($id){
        $products = Product::findOrFail($id);
        return  view('admin.product.update',compact('products'));
    }
    public function update(Request $request, $id){
        $products = Product::findOrFail($id);
        $title = $request ->title;
        $category = $request ->category;
        $price = $request ->price;

        $products->title = $title;
        $products->category = $category;
        $products->price = $price;
        $data = $products->save();
        if($data){
            session()->flash('Success', 'Product Updated Successfully');
            return redirect(route('admin/products'));
        }
        else{
            session()->flash('errors', 'Some Problem Occurs');
            return redirect(route('admin/products/update'));
        }
    }
    public function delete($id){
        $products = Product::findOrFail($id)->delete();
        if($products){
            session()->flash('Success', 'Product Deleted Successfully');
            return redirect(route('admin/products'));
        }
        else{
            session()->flash('errors', 'Some Problem Occurs');
            return redirect(route('admin/products'));
        }
    }
}

