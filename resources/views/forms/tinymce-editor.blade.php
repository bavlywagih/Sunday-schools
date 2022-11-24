@if ($checkadmin)

<h1 class="container ">صفحه انشاء منشور جديد</h1>
<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

    <form method="post" action="{{ $create }}" class="form-new" id="create-post-form">
        @csrf
        <div class="w-50 m-auto mt-0 mobile-width" >
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

            <textarea id="post-editor"  name="body" class="text-end" placeholder="{{ $AuthUsername }} اكتب ما تفكر فيه هنا" cols="50"></textarea>
            @include('components.head.tinymce-config')
            <button type="submit" class="btn btn-primary w-100 mt-3 ">ارسال</button>

        </div>

    </form>
</div>


@endif


