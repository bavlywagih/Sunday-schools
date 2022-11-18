@extends('template.template')
@section('content')
<style>.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  display:flex;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

</style>
{{-- <div class="card d-flex" style="width: 18rem;">
    <div><iframe src="{{$books->url}}" class="card-img-top" width="640" height="480" ></iframe></div>
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div> --}}
{{-- <div>
    <div><iframe src="{{$books->url}}" class="card-img-top" width="640" height="480" ></iframe></div>
    <div>mmnmnm</div>
</div> --}}

<div>
    <div class="card m-auto">
        <div>
            <div class="card-body">
                <h3>
                    {{$books->name}}
                </h3>
            </div>
            <div>
                <div><iframe src="{{$books->url}}" class="card-img-top" width="640" height="480" ></iframe></div>
            </div>
        </div>

    </div>
</div>
@endsection

