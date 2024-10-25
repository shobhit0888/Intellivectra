<?php

namespace App\Http\Controllers\Admin\Blogs;

use App\DataTables\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogDataTable $blogDataTable)
    {
        $categories = Category::where('is_active',1)->where('parent_id',null)->latest()->get();
        $sub_categories = Category::where('is_active',1)->whereNotNull('parent_id')->latest()->get();
        return $blogDataTable->render('admin.pages.blogs.blogs.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('is_active',1)->where('parent_id',null)->latest()->get();
        $sub_categories = Category::where('is_active',1)->whereNotNull('parent_id')->latest()->get();
        return view('admin.pages.blogs.blogs.add',compact('categories','sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'small_desc' => 'required',
        ]);
        $data = $request->all();
        $data['created_by'] = 'Admin';
        $data['slug'] = Str::slug($request->title);
        $blog = Blog::create($data);
        if( $blog){
            if($request->banner !=null){
                $image = $this->fileUpload($request->banner,$blog,'local');
                $image['document_type']='banner';
                $blog->banner()->create($image);
            }
            if($request->service_image !=null){
                $image = $this->fileUpload($request->service_image,$blog,'local');
                $image['document_type']='images';
                $blog->image()->create($image);
            }
            return redirect()->route('blogs.index')->with('Blogs created successfully.');
        }
        return redirect()->route('blogs.index');
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
        $sub_categories = Category::where('is_active',1)->whereNotNull('parent_id')->latest()->get();
        $blog = Blog::find($id);
        return view('admin.pages.blogs.blogs.edit',compact('categories','sub_categories','blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'small_desc' => 'required',
        ]);
        $data = $request->all();
        $data['created_by'] = 'Admin';
        $data['slug'] = Str::slug($request->title);
        


        $blog = Blog::find($id);
        $blog->update($data);
        if( $blog){
            if($request->banner !=null){
                $image = $this->fileUpload($request->banner,$blog,'local');
                $image['document_type']='banner';
                $blog->banner()->create($image);
            }
            if($request->service_image !=null){
                $image = $this->fileUpload($request->service_image,$blog,'local');
                $image['document_type']='images';
                $blog->image()->create($image);
            }
        }
        return redirect()->route('blogs.index')->with('Blogs updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
