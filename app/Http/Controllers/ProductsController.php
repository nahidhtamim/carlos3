<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllProducts(){
        $products = product::all();
        $categories = category::where('status', 1)->get();
        return view('admin.product.view-products', compact('products', 'categories'));
    }

    public function addProduct(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|unique:products',
            'description' => 'required',
            'image' => 'required',
            'cat_id' => 'required',
        ));
        
        $product = new product();
        $product->cat_id = $request->input('cat_id');
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->slug = Str::slug($request->input('title'));
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/product/', $fileName);
            $product->image = $fileName; 
        }
        $product->featured = $request->input('featured')==true ? '1':'0';
        $product->status = $request->input('status')==true ? '1':'0';
        $product->save();
        return redirect()->back()->with('status', 'Your product has been saved');
    }

    public function editProduct($id){
        $product = product::Find($id);
        $categories = category::where('status', 1)->get();
        return view('admin.product.edit-product', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required|unique:products',
            'description' => 'required',
            'image' => 'required',
            'cat_id' => 'required',
        ));

        $product = product::Find($id);
        $product->cat_id = $request->input('cat_id');
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->slug = Str::slug($request->input('title'));
        if($request->hasfile('image'))
        {
            $destination = 'upload/product/'.$product->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/product/', $fileName);
            $product->image = $fileName; 
        }
        $product->update();
        return redirect('/view-products')->with('status', 'Your product item has been updated');
    }

    public function deleteProduct($id){
        $product = product::Find($id);
        $product->delete();
        return redirect('/view-products')->with('status', 'Your product item has been deleted');
    }

    public function activeProduct($id)
    {
        $product = product::find($id);
        $product->status = '1';
        $product->update();
        return redirect()->back()->with('status', 'Product Item Activated');
    }

    public function deactiveProduct($id)
    {
        $product = product::find($id);
        $product->status = '0';
        $product->update();
        return redirect()->back()->with('warning', 'Product Item De-activated');
    }

    public function makeProductFeatured($id)
    {
        $product = product::find($id);
        $product->featured = '1';
        $product->update();
        return redirect()->back()->with('status', 'Product Item Featured');
    }

    public function unmakeProductFeatured($id)
    {
        $product = product::find($id);
        $product->featured = '0';
        $product->update();
        return redirect()->back()->with('warning', 'Product Item Not Featured');
    }

}
