@extends('template.template')
@section('content')
    <h1 class="container m-auto text-center"> الكتب في {{$sortings->name}}</h1>
    @forelse ($sortings->librarys as $library)
        <div class="container mt-2">
            <div class="row">
                <div class="col-sm mt-2">
                    <div class="card">

                        <div class="card-body d-flex  justify-content-between">
                            <a class="text-decoration-none" href="{{  route('showbook' , $library->book->id) }}"> <h4> {{ ($library->book->name ) }} </h4>  </a>
                            <div>
                                @if (Auth::user()->role == '1')

                            <a class="btn btn-danger" href="{{  route('book.delete' , $library->book->id) }}">delete</a>

                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h4>لا يوجد كتب في هذا التصنيف</h4>
    @endforelse


@endsection
