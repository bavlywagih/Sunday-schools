<div class="post-content ">
  <h5 class="card-title gap-2 my-2">
    <div class="post-content-d-flex">
        <div class="username d-flex align-items-center gap-2">{{ $author }}</div>
        <div class="post-content-d-flex" >
            <div class="dates text-muted fs-6 fw-normal ms-auto">{{ $postedOn }}</div>
    @if ($checkuser)
        <div class="dropdown">
            <a data-bs-toggle="dropdown" class="user-select-none text-dark" style="cursor: pointer;" >
                <span class="material-symbols-outlined ">more_vert</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item edit-hover" href="{{ $edit }}">
                    <span class="material-symbols-outlined ">edit</span>
                    تعديل المنشور
                </a></li>
                <li><a class="dropdown-item edit-hover" href="{{$delete}}">
                    <span class="material-symbols-outlined">delete</span>
                    حذف  المنشور
                </a></li>
            </ul>
        </div>
    @endif

        </div>
    </div>
  </h5>
  <p class="card-text">{!! $fullBody !!}</p>
</div>
