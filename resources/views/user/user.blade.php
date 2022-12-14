@extends('template.template')
@section('content')
{{-- @foreach ($users as $user)
@if ($user->id != Auth()->id() && $user->role != 1)
    {{$user->username}} <br>

@endif
@endforeach --}}

<div class="card w-75 m-auto">

    <table class="table w-75 m-auto ">
        <h2 class="text-center">
        جدول اسماء المستخدمين
    </h2>

    <a class="text-decoration-none text-white  m-auto" href="{{route('create')}}">
        <button type="button" class="btn btn-success ">
            انشاء مستخدم
        </button>
    </a>

    <thead>
        <tr class="table-dark ">
                    <th scope="col">الاسم</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">تاريخ الميلاد</th>
                    <th scope="col"> عدد الطايوهات</th>
                    <th scope="col"> بعض العمليات</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($users as $user)
            @if ($user->id != Auth()->id() && $user->role <= 0)
                <tr>
                    <th scope="row">{{$user->username}} </th>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->Tayo}}</td>
                    <td class="">
                        <button type="button" class="btn btn-success"><a href="" class="text-decoration-none text-white" >تعديل</a></button>
                        <button type="button" class="btn btn-danger"><a href=""  class="text-decoration-none text-white" >حذف</a></button>
                    </td>

                </tr>
            @endif
            @endforeach

        </tbody>
    </table>




</div>

@endsection
