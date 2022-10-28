@extends('template.template')
@section('content')

<div class="container">
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3 w-100">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                @if(Auth::user()->role == '1')
                    <div class="btn-profile">
                        <a href="{{ route('edit.profile') }}" class="btn btn-primary">تعديل</a>
                    </div>
                @endif
                        <div class="litter litter-profile" >

                            <span>{{Auth::user()->username[0]}}</span>
            @if(Auth::user()->role == '1')
            <div class="card-title d-flex align-items-center gap-2 " title="مشرف في الموقع ">
                <span class="material-symbols-outlined icon-admin-profile">
                    admin_panel_settings
                </span>
            </div>
            @else
            <div class="card-title d-flex align-items-center gap-2 " title="مستخدم في الموقع ">
                <span class="material-symbols-outlined icon-admin-profile">
                    person
                </span>
            </div>
            @endif
                        </div>

                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-8 w-100">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">الاسم </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                            <span>{{Auth::user()->username}}</span>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">رقم الهاتف</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->phone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">تاريخ الميلاد</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->birthday}}
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
@endsection
