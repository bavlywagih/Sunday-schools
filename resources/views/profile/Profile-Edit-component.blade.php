

<div class="container">
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3 w-100">

                        <x-profile.profile-litter></x-profile.profile-litter>

            </div>
            <form class="col-md-8 w-100" action="/profile-update/{{$authid}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$authid}}">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">الاسم </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                            <input type="text" name="username" class="form-control" value="{{$authname}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">رقم الهاتف</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                            <input type="number" name="phone" class="form-control" value="{{$authphone}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">تاريخ الميلاد</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="date" name="birthday" class="form-control" value="{{$authbirthday}}">


                    </div>
                </div>


            </div>
        </div>
        <button class="btn btn-primary w-100" type="submit">ارسال</button>
            </form>
          </div>

        </div>
    </div>
