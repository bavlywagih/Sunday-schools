@extends('template.template')
@section('content')

{{-- <div class="container">
    <div class="card">
        <h2 class="card-title">
            {!! $session->body !!}
        </h2>
    </div>
</div> --}}

<div class="d-flex align-items-start mt-3">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <button class="nav-link active" id="v-pills-session-tab" data-bs-toggle="pill" data-bs-target="#v-pills-session" type="button" role="tab" aria-controls="v-pills-session" aria-selected="false">الدرس</button>
                          <button class="nav-link" id="v-pills-users-tab" data-bs-toggle="pill" data-bs-target="#v-pills-users" type="button" role="tab" aria-controls="v-pills-users" aria-selected="false">المخدومين</button>
                        </div>
                        <div class="tab-content w-100" id="v-pills-tabContent">

                          <div class="tab-pane fade show active" id="v-pills-session" role="tabpanel" aria-labelledby="v-pills-session-tab" tabindex="0">
                            <table class="table ">
                                <thead>
                                  <tr>
                                    <th scope="col " style="border: 0">
                                    <div class="card">
                                      <div class="card-body">
                                        <div style="display: flex;justify-content: space-between;">
                                            <h5 class="card-title">{{$session->title }}</h5>
                                            <div>
<div class="d-flex">

    <p class="card-text">{{$session->created_at->diffForHumans()}}</p>
    <div class="dropdown">
        <a   data-bs-toggle="dropdown" class="user-select-none text-dark" style="cursor: pointer;" >
                                                        <span class="material-symbols-outlined ">more_vert</span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item edit-hover" href="">
                                                              <span class="material-symbols-outlined ">edit</span>
                                                              تعديل المنشور
                                                            </a></li>
                                                            <li><a class="dropdown-item edit-hover" href="">
                                                                <span class="material-symbols-outlined">delete</span>
                                                                حذف  المنشور
                                                            </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <hr>
                                                {{-- @foreach ($session->attentances as $attentance)
                                                    {{ ($attentance->user->username ) }} <br>
                                                @endforeach --}}
                                            <h5 class="card-title">{!!$session->body !!}</h5>
                                      </div>

                                </thead>
                                {{-- <tbody> --}}
                                    {{-- <td class="border-0" scope="col">{!! $session->title !!} </td> --}}
                                {{-- </tbody> --}}
                            </table>

                          </div>

                          <div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-users-tab" tabindex="0">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">smsmm</th>
                                  </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
