@extends('template.template')
@section('content')


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
                                    <div class="card w-75 m-auto">
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
                                                              تعديل الدرس
                                                            </a></li>
                                                            <li><a class="dropdown-item edit-hover" href="{{  route('session.delete' , $session->id) }}">
                                                                <span class="material-symbols-outlined">delete</span>
                                                                حذف  الدرس
                                                            </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <hr>
                                            <h5 class="card-title p-3">{!! substr(nl2br($session->body), 0) !!}</h5>
                                        </div>

                                </thead>
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
