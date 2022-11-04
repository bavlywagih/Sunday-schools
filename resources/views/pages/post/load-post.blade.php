@extends('template.template')
@section('content')
@auth

@forelse($posts as $post)
  <div class="card" style="width: 50%; margin: 10px auto;">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title d-flex align-items-center gap-2">{{ $post->user->username }}<span class="badge text-bg-primary">مشرف</span></h5>

            <div class="d-flex justify-content-between">
                <p class="dates text-muted fs-6 fw-normal"> {{ $post->created_at->diffForHumans() }}</p>
          @if ($post->user->username == Auth::user()->username && Auth::user()->role == '1')
          <div class="dropdown">
  <a   data-bs-toggle="dropdown" class="user-select-none text-dark" style="cursor: pointer;" >
          <span class="material-symbols-outlined ">more_vert</span>
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item edit-hover" href="{{  route('post.edit' , $post->id) }}">
        <span class="material-symbols-outlined ">edit</span>
        تعديل المنشور
    </a></li>
    <li><a class="dropdown-item edit-hover" href="{{  route('post.delete' , $post->id) }}">
        <span class="material-symbols-outlined">delete</span>
            حذف  المنشور
    </a></li>
  </ul>
</div>
            @endif
            </div>
        </div>
        <hr>
          <p class="card-text">{!! substr(nl2br($post->body), 0) !!} </p>



      {{-- <p class="card-text" style="padding: 1rem; margin: 1rem 0; border: 1px solid #ccc; border-radius: 6px">{!! nl2br($posts->body) !!}</p> --}}

    </div>
  </div>
@empty
  <div class="card w-50 m-auto mt-4">
    <div class="card-body text-center">
        @auth
                @if(Auth::user()->role == '1')
                <p class="card-text">لا يوجد اي منشورات الان <a href="{{route('posts.create.form')}}">اضغط هنا لاضافه واحد</a> </p>
                @else
                <p class="card-text">No posts are available right now!
                @endif
            @else
            <p class="card-text">  يجب تسجيل الدخول اولاً <a href="{{ route('login.form') }}">من هنا</a> </p>
        @endauth
      </p>
    </div>
  </div>
@endforelse
@else
<p class="card-text">  يجب تسجيل الدخول اولاً <a href="{{route('login.form')}}">من هنا</a> </p>
    @endauth


@endsection

