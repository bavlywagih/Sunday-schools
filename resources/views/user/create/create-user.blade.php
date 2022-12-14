@extends('template.template')
@section('content')
@auth
<div>
<div class="card w-75 m-auto ">
    <div class="card-body text-center">
      <h2>انشاء مستخدم جديد</h2>
    </div>

    <div class="card-body">
        <form action="{{route('user')}}" method="POST">
            <div class="mb-3">
            @csrf
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">الاسم :</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="اكتب الاسم هنا:">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">رقم الهاتف	:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="اكتب الاسم هنا:">
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">تاريخ الميلاد	 :</label>
                <input type="text"  class="form-control" id="birthday" name="birthday" placeholder="اكتب الاسم هنا:">
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">اضافه طايوهات :</label>
                <input type="number" placeholder="اضافه طايوهات" class="form-control">
            </div>
            @if (Auth::user()->role == '3')
                <div class="mb-3">
                    <label for="birthday" class="form-label"> اختيار  :</label>
                    <select class="form-select " name="role" aria-label="Default select example">
                        <option  selected value="1">مستخدم</option>
                        <option value="1">مشرف </option>
                        <option value="2">اب كاهن</option>
                        <option value="3">سوبر مشرف </option>
                    </select>
                </div>
                @endif
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">حفظ</button>
            </div>

        </form>
    </div>
</div>


@endauth
@endsection
