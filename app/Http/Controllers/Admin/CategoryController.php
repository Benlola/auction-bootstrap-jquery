<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $pageTitle    = 'All Categories';
        $emptyMessage = 'No category found';
        $categories   = Category::latest()->with('products')->paginate(getPaginate());

        return view('admin.category.index', compact('pageTitle', 'emptyMessage', 'categories'));
    }

    public function create()
    {
        $pageTitle = 'Add category';
        $category  = Category::make();

        return view('admin.category.create', compact('pageTitle', 'category'));
    }

    public function edit(Category $category)
    {
        $pageTitle = 'Edit category '.$category->name;

        return view('admin.category.edit', compact('pageTitle', 'category'));
    }


    public function store(Request $request)
    {
        $this->validation($request);
        $category = $this->saveCategory($request);
        $notify[] = ['success', 'Category added successfully'];

        return redirect()->route("admin.category.edit", $category)->withNotify($notify);
    }

    public function update(Request $request, Category $category)
    {
        $this->validation($request);

        $category = $this->saveCategory($request, $category);
        $notify[] = ['success', 'Category added successfully'];

        return redirect()->route("admin.category.edit", $category)->withNotify($notify);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        $notify[] = ['success', 'Category delete successfully'];

        return redirect()->route('admin.category.index')->withNotify($notify);
    }


    public function saveCategory(Request $request, Category $category = null)
    {
        $request->validate([
            'name'           => 'required',
            'icon'           => 'required',
            'status'         => 'nullable',
            'media_category' => 'nullable',
        ]);

        $category = Category::updateOrCreate(
            ['id' => $category->id ?? null],
            [
                'name'           => $request->name,
                'icon'           => $request->name,
                'media_category' => $request->media_category,
                'status'         => $request->has("status") ? 1 : 0,
            ]
        );

        return $category;
    }


    protected function validation($request)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
        ]);
    }

}
