<table class="table ">
<thead>
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
