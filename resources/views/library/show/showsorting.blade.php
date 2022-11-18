{{-- @foreach ($sortings->book as $book )
{{ $book->name }}
mm
@endforeach --}}
@extends('template.template')
@section('content')
    <h1 class="container m-auto text-center"> الكتب في {{$sortings->name}}</h1>
@foreach ($sortings->librarys as $library)
{{-- @if (  count($library->book->id) == 0)
mkamkssnm
@else --}}
<div class="container mt-2">
    <div class="row">
        <div class="col-sm mt-2">
<div class="card">
  <div class="card-body d-flex  justify-content-between">
 <a class="text-decoration-none" href="{{  route('showbook' , $library->book->id) }}"> <h4> {{ ($library->book->name ) }} </h4>  </a>
 <div>
    <a class="btn btn-danger" href="{{  route('book.delete' , $library->book->id) }}">delete</a>
 </div>
 </div>
</div>
    </div>
</div>
</div>

{{-- @endif --}}

{{-- @endif --}}

        {{-- <iframe src="{{ ($library->book->url ) }}" width="640" height="480" ></iframe> --}}
@endforeach


@endsection
