<?php

namespace App\Http\Controllers\Admin\Blogs;

use App\DataTables\CategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $categoryDataTable)
    {
        // if(Auth::user()->can('create', Category::class) || Auth::user()->can('viewAny', Category::class)){
            $categories = Category::where('is_active',1)->latest()->get();
            return $categoryDataTable->render('admin.pages.blogs.category',compact('categories'));
        // }else {
        //     return redirect('/dashboard')->with("error", "You don't have permission.");
        // }

        // return view('admin.pages.blogs.category');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name',
            'small_desc' => 'required',
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $category = Category::create($data);
        if( $category){
            return redirect()->route('category.index')->with('Category Created Successfully');
        }
        return redirect()->route('category.index')->with('something issue');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::where('is_active',1)->latest()->get();
        $category = Category::find($id);
        return view('admin.pages.blogs.category-edit',compact('categories','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name,'.$id,
            'small_desc' => 'required',
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $category = Category::find($id);
        $category->update($data);
        if( $category){
            return redirect()->route('category.index');
        }
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('category.index');

    }
}
