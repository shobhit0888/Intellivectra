@extends('admin.layouts.app')

@section('content')
@section('page_title', 'IntelliVectra | Category')
@section('blogs', 'menu-open')
@section('blogs_category', 'menu-open')
@section('blogs_category', 'active')
@include('admin._partials.bredcum',['title'=>'Category'] )

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @include('admin.components.category-nav-header' ,['activeTab' => 'list'])

                    <form id="add-category-form"  action="{{ route('category.update',$category)}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name*</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $category->name}}" name="name" placeholder="Enter name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description*</label>
                                        <textarea type="text" class="form-control  @error('name') is-invalid @enderror" rows="4" id="small_desc" name="small_desc" placeholder="Enter name">{{ $category->small_desc}}</textarea>
                                        @error('small_desc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Parent Category</label>
                                        <select class="form-control" id="parent_id" name="parent_id">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id}}" {{ $category->parent_id == $item->parent_id ? 'selected' : ''}}>{{ $item->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Meta Title*</label>
                                        <input type="text" class="form-control" value="{{ $category->meta_title}}" id="meta_title" name="meta_title" placeholder="Meta title">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Meta Description*</label>
                                        <textarea type="text" class="form-control" rows="4"id="meta_desc" name="meta_desc" placeholder="Meta desc">{{ $category->meta_desc}}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Is Active</label>
                                        <select class="form-control" id="is_active" name="is_active">
                                            <option value="1" {{ $category->is_active ? 'selected' : ''}}>Yes</option>
                                            <option value="0" {{ $category->is_active ? '' : 'selected'}}>No</option>
                                        </select>
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
</section>


<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin/plugins/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('admin/custom/custom.js')}}"></script>


@endsection
