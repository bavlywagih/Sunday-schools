
@extends('template.template')
@section('content')
<div class="card m-2" >
    <div class="card-body">
        <div class="d-flex justify-content-between ">
            <h2>  اسم الدرس : <span> {{ $sessions->title }}</span>   </h2>
            <div class="dropdown"  >
                        <button class="border-0 bg-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                        <ul class="dropdown-menu">
                            @if (Auth::user()->role == '1')
                                <li><a class="dropdown-item text-end" href="#">تعديل</a></li>
                            @endif
                            <input  style="display: none;" value="http://127.0.0.1:8000/session/{{$sessions->id}}" id="myInput{{$sessions->id}}">
                            <button class="border-0 bg-white w-100 padding-0   "  onclick="myFunction{{$sessions->id}}()">
                                <li><a class="dropdown-item text-end" href="#">مشاركه</a></li>
                            </button>
                        </ul>
            </div>
        </div>
        <hr>
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                الدرس
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="d-flex justify-content-between">
                </div>
                <div class="card-body">
                    <p>{{ $sessions->body }}</p>
            </div>
            </div>
        </div>
    </div>
    @php $attendedUsersIds = [] @endphp
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    الحضور
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @forelse ($sessions->attentances as $attentance)
                            {{ $attentance->user->username }} <br>
                            @php array_push($attendedUsersIds, $attentance->user->id) @endphp
                    @empty
                    لا يوجد حضور
                    @endforelse
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    الغياب
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                        @forelse ($sessions->grade->users->whereNotIn('id', $attendedUsersIds)->whereNotNull('grade_id') as $user)
                            {{ $user->username }} <br>
                            @empty
                            لا يوجد غياب
                        @endforelse
                </div>
            </div>
        </div>
        @php $attendedUsersIds = [] @endphp
</div>
<script>
function myFunction{{$sessions->id}}() {
  var copyText = document.getElementById("myInput{{$sessions->id}}");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  alert("Copied the text: " + copyText.value);
}
</script>
@endsection
