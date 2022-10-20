@extends('template.template')
@section('content')


<section class="vh-100">
  <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="{{ asset('image/logo.png') }}"
          class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form action="/login/admin" method="POST">
                @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13">اسم المستخدم</label>
            <input type="text" id="form1Example13" class="form-control form-control-lg" name="name" placeholder="اكتب اسم المستخدم" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23">كلمه المرور</label>
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" placeholder="اكتب كلمه المرور "/>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
            <div class="form-check">
                <label class="form-check-label" for="form1Example3">تذكرني</label>
                <input class="form-check-input" name="remember" type="checkbox" value="1" id="remember" checked/>
            </div>
            <a href="#!">نسيت كلمه المرور</a>
        </div>

          <button type="submit" class="btn btn-primary btn-lg btn-block w-100">تسجيل الدخول</button>


        </form>
    </div>
    </div>
  </div>
</section>

@endsection
