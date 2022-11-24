
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

		  <a class="nav-link nav-pro-mopile {{ $currentRouteName === 'index' ? 'active' : '' }}" href="/">الصفحه الرئيسيه</a>

		</li>

		@auth

		<li class="nav-item">
		  <a class="nav-link nav-pro-mopile {{ $currentRouteName === 'library' ? 'active' : '' }}" href="{{$library}}">المكتبه</a>
		</li>






@auth
        <li class="nav-item"><a class="nav-link nav-pro-mopile {{ $currentRouteName === 'load.post' ? 'active' : '' }}" href="{{ $loadPost }}"> المجتمع </a></li>
@endauth

		@if($adminRole)
			<li class="nav-item">

			    <a class="nav-link nav-pro-mopile {{ $currentRouteName === 'attendance' ? 'active' : '' }}" href="{{route('attendance')}}"> اخري </a>

			</li>

		@endif

	    @endauth

    </ul>

@auth

<ul class="nav navbar-nav  justify-content-end">

	    <li class="nav-item dropdown">

        	<a class="text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

        	    <div class="litter" ><span>{{$litterAuth}}</span></div>

        		    <ul class="dropdown-menu">

        			    <li><a class="dropdown-item nav-pro-mopile nav-text-litter {{ $currentRouteName === 'profile' ? 'active' : '' }}" href="{{ $profile }}">الملف الشخصي</a></li>

        			    <li><a class="dropdown-item nav-pro-mopile nav-text-litter" href="#">Another action</a></li>

        			    <li><hr class="dropdown-divider"></li>

        			    <li><a class="dropdown-item nav-pro-mopile nav-text-litter" href="{{ $logout }}"> تسجيل الخروج </a></li>

        			</ul>

		</li>

	</ul>

</a>

	@else

    <ul class="nav navbar-nav  justify-content-end">

	    <li class="nav-item">

		    <a class="nav-link nav-pro-mopile {{ $currentRouteName === 'login.form' ? 'active' : '' }}" href="{{ $login }}"> تسجيل الدخول </a>

		</li>

	</ul>

  @endauth

  </div>

</nav>


