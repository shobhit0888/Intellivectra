@extends('admin.layouts.app')

@section('content')
@section('page_title', 'IntelliVectra | Blogs')
@section('blogs', 'menu-open')
@section('blogs_blog', 'menu-open')
@section('blogs_blog', 'active')
@include('admin._partials.bredcum',['title'=>'Blogs'])


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
<style>
    .note-fontname{
        display:none;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @include('admin.components.blog-nav-header' ,['activeTab' => 'add'])
                    <div class="card-body">
                        <form id="add-category-form"  action="{{ route('blogs.store')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title Name*</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Small Description*</label>
                                            <textarea type="text" class="form-control @error('small_desc') is-invalid @enderror" rows="4" id="small_desc" name="small_desc" placeholder="Enter name"></textarea>
                                            @error('small_desc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description*</label>
                                            <textarea type="text" id="summernote" class="form-control @error('description') is-invalid @enderror" rows="4" name="description" placeholder="Enter name"></textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <select class="form-control" id="category_id" name="category_id">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Sub Category Name</label>
                                            <select class="form-control" id="sub_category_id" name="sub_category_id">
                                                <option value="">Select Sub Category</option>
                                                @foreach ($sub_categories as $item)
                                                    <option value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Meta Title*</label>
                                            <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta title">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Meta Description*</label>
                                            <textarea type="text" class="form-control" rows="4" id="meta_desc" name="meta_desc" placeholder="Meta desc"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Is Active</label>
                                            <select class="form-control" id="is_active" name="is_active">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Upload Banner</label>
                                            <input type="file" class="form-control" id="banner" name="banner">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Upload Service Image</label>
                                            <input type="file" class="form-control" id="service_image" name="service_image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('admin/custom/custom.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 300,
            });
        });
    </script>
@endsection
