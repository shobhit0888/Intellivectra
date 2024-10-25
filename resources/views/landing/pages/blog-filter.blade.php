@if (count($blogs) > 0)
    @foreach ($blogs as $key => $item)
    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.1s">
        <div class="blog-box-shadow">
            <div class="blog-item bg-light rounded overflow-hidden">
                <div class="blog-img position-relative overflow-hidden">
                    @if ($item->image)
                        <img class="img-fluid w-100" src="{{ $item->image->url}}" alt="">
                    @else
                        <img class="img-fluid w-100" style="height: 400px; object-fit:cover;" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                    @endif

                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                </div>
                <div class="p-4">
                    <div class="d-flex mb-3">
                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>Admin</small>
                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i> {{ date('D, d M Y', strtotime($item->created_at))}}</small>
                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>{{ucfirst($item->category ? $item->category->name : '')}}</small>
                    </div>
                    <h4 class="mb-3 text-left blog-title">{{ucfirst($item->title)}}</h4>
                    <p class="text-justify">{{ucfirst($item->small_desc)}}</p>
                    <a class="text-primary blog-link" href="{{ route('blogs-details',['category'=>$item->category ? $item->category->slug : 'nil','slug'=>$item->slug !='' ? $item->slug :Str::slug($item->title)  ])}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                      </svg></a>
                </div>
            </div>
        </div>
    </div>

    @endforeach


@else
    <div style="margin-top: 10px;">
        <div class="demo-inline-spacing  justify-content-end">
            <td id="norecord" colspan="6" align="center">
            No records Found.
            </td>
        </div>
    </div>
@endif
