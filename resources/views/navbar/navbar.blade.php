
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
        @auth
  <li class="nav-item">
    <button class="nav-link border border-0 bg-transparent nav-pro-mopile" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        المكتبه
    </button>
  </li>


            @if(Auth::user()->role == '0')
                <li class="nav-item">
                  <a class="nav-link nav-pro-mopile {{ \Request::route()->getName() === 'load.post' ? 'active' : '' }}" href="{{route('load.post')}}">مشاهدة المنشورات </a>
                </li>
                @endif



                @if(Auth::user()->role == '1')
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-pro-mopile" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            المجتمع
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item nav-pro-mopile {{ \Request::route()->getName() === 'posts.create.form' ? 'active' : '' }} " href="{{ route('posts.create.form') }}">انشاء منشور جديد</a></li>
                      <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item nav-pro-mopile {{ \Request::route()->getName() === 'load.post' ? 'active' : '' }}" href="{{route('load.post')}}">مشاهدة المنشورات </a></li>
          </ul>
        </li>
        @endif



        @if(Auth::user()->role == '1')
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-pro-mopile" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ملخص الدروس
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item nav-pro-mopile  " href="#">انشاء  ملخص درس</a></li>
                      <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item nav-pro-mopile" href="#">مشاهدة ملخص درس  </a></li>
          </ul>
        </li>
        @endif



        @endauth
      </ul>

  @auth
<ul class="nav navbar-nav  justify-content-end">
      <li class="nav-item dropdown">
    <a class="text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <div class="litter" style="font-size: 20px; line-height: 36px;">
        <span>{{Auth::user()->username[0]}}</span>
    </div>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item nav-pro-mopile {{ \Request::route()->getName() === 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">الملف الشخصي</a></li>
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
          <a class="nav-link nav-pro-mopile {{ \Request::route()->getName() === 'login.form' ? 'active' : '' }}" href="{{ route('login.form') }}"> تسجيل الدخول </a>
        </li>
    </ul>
  @endauth



  </div>
</nav>

@include('components/offcanvas')

