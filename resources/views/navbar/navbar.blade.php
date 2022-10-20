
<nav class="navbar navbar-expand-lg bg-light sticky-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('image/logo.png') }}" width="30" height="30" alt="">
         <span class="nav-pro-mopile">خدمه عمود الدين</span>
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-between" id="navbarSupportedContent">
<ul class="nav navbar-nav  justify-content-end">
        <li class="nav-item">
          <a class="nav-link nav-pro-mopile {{ \Request::route()->getName() === 'index' ? 'active' : '' }}" href="/">الصفحه الرئيسيه</a>
        </li>
  <li class="nav-item">
    <button class="nav-link border border-0 bg-transparent nav-pro-mopile" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        المكتبه
    </button>
  </li>
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            المجتمع
          </a>
          <ul class="dropdown-menu">
            @auth
            <li><a class="dropdown-item {{ \Request::route()->getName() === 'page.posts' ? 'active' : '' }} " href="{{ route('page.posts') }}">انشاء منشور جديد</a></li>
            @endauth
            <li><a class="dropdown-item" href="#">مشاهدة المنشورات</a></li>
            @auth
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">مراقبه المنشورات</a></li>
            @endauth
          </ul>
        </li>

    </ul>
  @auth
<ul class="nav navbar-nav  justify-content-end">
      <li class="nav-item dropdown">
    <a class="text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <div class="litter" style="font-size: 20px; line-height: 36px;">
        <span>{{Auth::user()->name[0]}}</span>
    </div>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item nav-pro-mopile" href="#">Action</a></li>
              <li><a class="dropdown-item nav-pro-mopile" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item nav-pro-mopile" href="{{ route('logout') }}"> تسجيل الخروج </a></li>
            </ul>
        </li>
    </ul>
</a>
    @else
  <ul class="nav navbar-nav  justify-content-end">
      <li class="nav-item">
          <a class="nav-link nav-pro-mopile {{ \Request::route()->getName() === 'login.form.admin' ? 'active' : '' }}" href="{{ route('login.form.admin') }}"> تسجيل الدخول المشرفين</a>
        </li>
    </ul>
  @endauth



  </div>
</nav>

@include('components/offcanvas')
