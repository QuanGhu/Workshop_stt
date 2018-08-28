<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $category = Category::get();
        return view('category.index')->with('category',$category);
    }

    public function save(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return $category ? redirect()->route('category')
            : redirect()->route('category');

    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return $category ? redirect()->route('category')
            : redirect()->route('category');
    }

    public function edit($id)
    {
        $data = Category::findOrFail($id);
        
        return view('category.form')->with('data', $data);
    }

    public function update(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->name = $request->name;
        $category->save();

        return $category ? redirect()->route('category')
            : redirect()->route('category');
    }
}
