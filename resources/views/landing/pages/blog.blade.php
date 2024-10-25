
@extends('landing.layouts.base')

@section('contents')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">

        <div class="row ">
            <div class="col-lg-12">
                <div class="row">
                    @include('landing.pages.blog-filter')
                </div>
            </div>
           
        </div>
        {!! $blogs->links() !!}
        
    </div>
</div>


@endsection
