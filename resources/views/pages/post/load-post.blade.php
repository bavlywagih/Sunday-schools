@extends('template.template')
@section('content')
<div class="post card" id="post-{{ $postId }}">
  <div class="card-body">
    <div class="post-content">
        <h5 class="card-title d-flex align-items-center justify-content-start gap-2 my-2">
            <span class="username d-flex align-items-center gap-2">author</span>
            <span class="badge text-bg-primary">User</span>
            <span class="dates text-muted fs-6 fw-normal ms-auto">postedOn</span>
        </h5>
        <p class="card-text">fullBody </p>
    </div>

<div class="post-actions mt-4 mb-3 d-flex items-center" id="post-{{ $postId }}-actions" data-post-id="{{ $postId }}">
        <small class="text-muted ms-auto">commentsCount </small>
    </div>    <hr />


    <div class="comment my-3">
  <h6 class="user d-flex align-items-center justify-content-start gap-2 mb-3">
    <span class="username d-flex align-items-center gap-2">commentAuthor </span>
    <span class="badge text-bg-primary">User</span>
    <span class="dates text-muted fs-6 fw-normal ms-auto">commentedOn</span>
  </h6>
  <div class="content">subBody ...</div>
</div>


    </div>
</div>
@endsection

