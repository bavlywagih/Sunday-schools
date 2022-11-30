@extends('template.template')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <x-attendance.Create.CreateGrade></x-attendance.Create.CreateGrade>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createGrade">
                            انشاء فصل
                        </button>
                        @include('attendance/create/create-session')
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createSession">
                            انشاء درس
                        </button>
                        @include('attendance/create/collectAttendance')
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#collectAttendance">
                            وضع الحضور
                        </button>
                        <div class="d-flex align-items-start mt-3">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-grades-tab" data-bs-toggle="pill" data-bs-target="#v-pills-grades" type="button" role="tab" aria-controls="v-pills-grades" aria-selected="true">الفصول</button>
                                <button class="nav-link" id="v-pills-session-tab" data-bs-toggle="pill" data-bs-target="#v-pills-session" type="button" role="tab" aria-controls="v-pills-session" aria-selected="false">الدروس</button>
                                <button class="nav-link" id="v-pills-users-tab" data-bs-toggle="pill" data-bs-target="#v-pills-users" type="button" role="tab" aria-controls="v-pills-users" aria-selected="false">الاشخاص</button>
                            </div>
                            <div class="tab-content w-100" id="v-pills-tabContent">
                                @include('attendance/show/grade')
                                @include('attendance/show/session')
                                @include('attendance/show/users')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
