@extends('template.template')
@section('content')


@if(Auth()->user()?->role == '1')
    <div class="w-50 m-auto mobile-width">
        <div class="card">
            <div class="card-body m-auto ">
                <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#sortingModal">انشاء تصنيف للكتب</button>
                <x-library.sorting></x-library.sorting>
                <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#bookModal">انشاء  كتاب</button>
                <x-library.books></x-library.books>
                <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#booksortingModal">اختيار تصنيف للكتب</button>
                {{-- <x-library.booksorting></x-library.booksorting> --}}
                @include('library.booksorting')
            </div>
        </div>
    </div>
    <hr class="w-50 mt-2 m-auto mobile-width">
    @else
    <h1 class="text-center">تصنيفات الكتب</h1>
@endif
@Auth
    {{-- <x-library.show.sorting :sorting="$sorting"></x-library.show.sorting> --}}
                @include('library.show.sorting')


@endauth
    <div></div>
@endsection

