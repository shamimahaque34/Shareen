<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{   private $category;
    private $categories;
    
    public function index()
    {
        return view('admin.category.add');
    }

    public function create(Request $request)
    {
        Category::newCategory($request);
        return redirect()->back()->with('message', 'Category info create successfully.');
    }

    public function manage()
    {
        $this->categories = Category::orderBy('id', 'desc')->get();
        return view('admin.category.manage', ['categories' => $this->categories]);
    }

    public function edit($id)
    {
        return view('admin.category.edit', ['category' => Category::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category update Successfully');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/manage-category')->with('message', 'Category delete Successfully');
    }

}
