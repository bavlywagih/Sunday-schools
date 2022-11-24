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

@endif

