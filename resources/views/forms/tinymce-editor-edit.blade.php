          @if ($nameandrole)

<h1 class="container text-center">صفحه تعديل المنشور </h1>
<div>
    <form method="post" action="{{ $routepostid }}" class="form-new" id="create-post-form">
        @csrf
        <div class="w-50 m-auto mt-0 " >
            <input type="hidden" name="user_id" value="{{$Authid}}">

            <textarea id="post-editor"   name="body" class="text-end border" placeholder="{{$AuthUsername}} اكتب ما تفكر فيه هنا" cols="50">{!! $bodypost !!}</textarea>
            <button type="submit" class="btn btn-primary w-100 mt-3 ">ارسال</button>
        </div>
    </form>
</div>
<div class="toast-container position-fixed bottom-0 end-0 p-3  ">
    <div id="liveToast"  class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header justify-content-between">
            <div>
                <h5 class="me-auto rounded">انتبه !</h5>
            </div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        <h6>تظهر المنشورات التي تنشرها انت او غيرك في صفحه <a href="#">مشاهده المنشورات</a></h6>
    </div>
</div>
</div>
@endif

