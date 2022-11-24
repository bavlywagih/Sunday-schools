@extends('template.template')
@section('content')

<style>
body{
    overflow: hidden;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  display:flex;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

</style>
<div>
    <div class="card m-auto book" id="mypdf">
        <div>
            <div class="card-body d-flex justify-content-between ">
                <h3>
                    {{$books->name}}
                </h3>
                <div>
                    <div class="dropdown"  >
                        <button class="border-0 bg-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                        <ul class="dropdown-menu">
                            @if (Auth::user()->role == '1')
                                <li><a class="dropdown-item text-end" href="#">تعديل</a></li>
                            @endif
                                    <input   style="display: none;" value="http://127.0.0.1:8000/post/" id="myInput">
                                <li class="text-end"><a class="dropdown-item" onclick="myFunction()" href="#">مشاركه</a></li>
                                <li class="text-end"><a class="dropdown-item" onclick="openFullscreen();" >تكبير الشاشه</a></li>
                                <li class="text-end"><a class="dropdown-item" onclick="closeFullscreen();" >تصغير الشاشه</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <div><iframe src="{{$books->url}}" id="mypdf" style="height: 800px" class="card-img-top" width="640"  ></iframe></div>
            </div>
        </div>

    </div>
</div>
<script>
var elem = document.getElementById("mypdf");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) {
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) {
    elem.msRequestFullscreen();
  }
}
function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen();
  }
}
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  // alert("Copied the text: " + copyText.value);
}
</script>
@endsection

