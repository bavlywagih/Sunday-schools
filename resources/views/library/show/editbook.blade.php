@extends('template.template')
@section('content')

<div class="card w-50 m-auto mobile-width mt-2">
    <div class="card-body">
        <h3> تعديل التصنيف</h3>
        <form action="{{route('sortings.edit' , $sortings->id)}}" method="POST">
            @csrf
                <label for="exampleInputEmail1" class="form-label">اسم التصنيف :</label>
                <input type="text" value="{{$sortings->name}}" required class="form-control" name="name" placeholder="اكتب اسم التصنيف هنا"  id="exampleInputEmail1" aria-describedby="emailHelp">
                <button type="submit" class="btn btn-primary mt-2 w-100">Submit</button>

        </form>
    </div>
</div>

@endsection
