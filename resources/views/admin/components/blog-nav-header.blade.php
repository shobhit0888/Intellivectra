
<div class="card-header p-2">
    <div class="row">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link {{ $activeTab == 'list' ? 'active' :'' }} " href="{{ route('blogs.index')}}" >List</a></li>
            <li class="nav-item"><a class="nav-link {{  $activeTab == 'add' ? 'active' :'' }}" href="{{ route('blogs.create')}}" >Add</a></li>
            @if (  $activeTab == 'edit')
                <li class="nav-item"><a class="nav-link {{  $activeTab == 'edit' ? 'active' :'' }}" href="{{ route('blogs.edit',$blog)}}"> Edit</a></li>
            @endif

        </ul>

    </div>
</div><!-- /.card-header -->
