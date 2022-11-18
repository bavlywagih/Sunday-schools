
{{-- <div class="container mt-2">
  <div class="row">
    @foreach ($sessions as $session)

    <div class="col-sm mt-2">
<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>
    </div>
@endforeach

  </div>


</div> --}}
@foreach($sortings as $sorting)
<div class="container mt-2">
    <div class="row">
        <div class="col-sm mt-2">
<div class="card">
  <div class="card-body"><a class="text-decoration-none" href="{{  route('show' , $sorting->id) }}"> <h4>{{ $sorting->name }}</h2></a>  </div>
</div>
    </div>
    </div>
</div>
    @endforeach
{{--
                                            <td><a href="
                                              {{-- {{  route('grade' , $grade->id ) }} --}}
                                              {{-- ">{{ $book->name }}</a></td> --}}
                                              {{-- "> --}}
                                            {{-- <td>
                                                @foreach($sortings as $sorting)
                                                <a href="
                                                ">
                                                {{ $sorting->name }} <br>
                                                </a>
                                                @endforeach
                                            </td>
                                        </tr> --}}


                                                {{-- {{z  route('session' , $session->id) }} --}}
