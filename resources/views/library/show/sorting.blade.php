
@forelse($sortings as $sorting)
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm mt-2">
                <div class="card">
                    <div class="card-body d-flex justify-content-between">
                        <a class="text-decoration-none" href="{{  route('show' , $sorting->id) }}"><h4>{{ $sorting->name }}</h2></a>
                        <div>
                        @if (Auth::user()->role == '1')
                            <a class="btn btn-success" href="{{route('editsortings' , $sorting->id)}}">edit</a>
                            <a class="btn btn-danger" href="{{  route('sortings.delete' , $sorting->id) }}">delete</a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    لا يوجد تصنيفات
@endforelse
