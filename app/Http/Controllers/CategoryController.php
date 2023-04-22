<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllCategory(){
        $categories = category::all();
        return view('admin.category.view-category', compact('categories'));
    }

    public function addCategory(Request $request)
    {
        $this->validate($request, array(
            'serial' => 'required',
            'title' => 'required',
        ));
        
        $category = new category();
        $category->serial = $request->input('serial');
        $category->title = $request->input('title');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/category/', $fileName);
            $category->image = $fileName; 
        }
        $category->status = $request->input('status')==true ? '1':'0';
        $category->featured = $request->input('featured')==true ? '1':'0';
        $category->save();
        return redirect()->back()->with('status', 'Your category card has been saved');
    }

    public function editCategory($id){
        $category = category::Find($id);
        return view('admin.category.edit-category', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $this->validate($request, array(
            'serial' => 'required',
            'title' => 'required',
        ));
        $category = category::Find($id);
        $category->serial = $request->input('serial');
        $category->title = $request->input('title');
        if($request->hasfile('image'))
        {
            $destination = 'upload/category/'.$category->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/category/', $fileName);
            $category->image = $fileName; 
        }
        $category->update();
        return redirect('/view-category')->with('status', 'Your category item has been updated');
    }

    public function deleteCategory($id){
        $category = category::Find($id);
        $category->delete();
        return redirect('/view-category')->with('status', 'Your category item has been deleted');
    }

    public function activeCategory($id)
    {
        $category = category::find($id);
        $category->status = '1';
        $category->update();
        return redirect()->back()->with('status', 'Category Item Activated');
    }

    public function deactiveCategory($id)
    {
        $category = category::find($id);
        $category->status = '0';
        $category->update();
        return redirect()->back()->with('warning', 'category Item De-activated');
    }

    public function markCategoryFeatured($id)
    {
        $category = category::find($id);
        $category->featured = '1';
        $category->update();
        return redirect()->back()->with('status', 'Category Item featured');
    }

    public function unmarkCategoryFeatured($id)
    {
        $category = category::find($id);
        $category->featured = '0';
        $category->update();
        return redirect()->back()->with('warning', 'category Item marked not featured');
    }
}
