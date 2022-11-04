@extends('template.template')
@section('content')

<style>
.user-first-letter {
  background-color: rgba(110, 48, 76, 1);
  color: #fff;
  font-size: 5rem;
}

.user-current-profile {
  border: 1px solid #ccc;
}</style>

    {{-- @foreach($grade->sessions as $session)
    <br>
    {{$session->title }}
    <br>
    @endforeach --}}

<div class="container">


</div>

  <main class=" m-10 w-100">
    {{-- <div class="col-3 details overflow-hidden">
        <div class="container">
            <h5 class="card-title mb-3">    {!! $grade->title !!}</h5>
        </div>

    </div> --}}
    <div >
        <h4 style="margin: 10px">{!! $grade->title !!}</h4>
      <hr class="mb-3" style="margin: 10px;">

      <h5 class="card-title mb-3" style="margin: 10px;" >الدروس</h5>
      <div class="d-grid gap-4" style="grid-template-columns: repeat(3, 1fr);margin: 10px;">

        @foreach($grade->sessions as $session)
        <div class="card">
          <div class="card-body">
            <div style="display: flex;justify-content: space-between;">
                <h5 class="card-title">{{$session->title }}</h5>
                <p class="card-text">{{$session->created_at->diffForHumans()}}</p>
            </div>
            <a href="{{  route('session' , $session->id) }}" class="btn btn-primary" style="margin-top: 10px; width: 100%;" >مشاهده الدرس</a>
          </div>
        </div>

        @endforeach
      </div>

    </div>
  </main>

@endsection
