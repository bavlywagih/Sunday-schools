@extends('template.template')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body w-100">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createGrade">
                        انشاء فصل
                    </button>

                    @include('components.attentance.form-create-grade')

                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createSession">
                        انشاء درس
                    </button>

                    @include('components.attentance.form-create-attendance')


                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createattendance  ">
                        اضافه حضور الي الدروس

                    </button>
                    @include('components.attentance.form-create-session')



                    <div class="d-flex align-items-start mt-3">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <button class="nav-link active" id="v-pills-grades-tab" data-bs-toggle="pill" data-bs-target="#v-pills-grades" type="button" role="tab" aria-controls="v-pills-grades" aria-selected="true">الفصل</button>
                          <button class="nav-link" id="v-pills-session-tab" data-bs-toggle="pill" data-bs-target="#v-pills-session" type="button" role="tab" aria-controls="v-pills-session" aria-selected="false">الدرس</button>
                          <button class="nav-link" id="v-pills-users-tab" data-bs-toggle="pill" data-bs-target="#v-pills-users" type="button" role="tab" aria-controls="v-pills-users" aria-selected="false">المخدومين</button>
                        </div>
                        <div class="tab-content w-100" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-grades" role="tabpanel" aria-labelledby="v-pills-grades-tab" tabindex="0">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">اسم الفصل</th>
                                    <th scope="col">الدرس</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grades as $grade)
                                        <tr>
                                            <td><a href="{{  route('grade' , $grade->id ) }}">{{ $grade->title }}</a></td>
                                            <td>
                                                @foreach($grade->sessions as $session)
                                                <a href="{{  route('session' , $session->id) }}">
                                                    {{ $session->title }} <br>
                                                </a>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                          </div>
                          <div class="tab-pane fade" id="v-pills-session" role="tabpanel" aria-labelledby="v-pills-session-tab" tabindex="0">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">الدرس</th>
                                    <th scope="col">الحضور</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sessions as $session)
                                        <tr>
                                            <td>{{ $session->title }}</td>
                                            <td>
                                                @foreach ($session->attentances as $attentance)
                                                    {{ ($attentance->user->username ) }} <br>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                          </div>

                          <div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-users-tab" tabindex="0">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Name</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                    @endforeach
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


