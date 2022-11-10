              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                @if($adminRole)
                    @if ( $currentRouteName === 'profile' ? 'active' : '' )
                    <div class="btn-profile">
                        <a href="{{ route('edit.profile') }}" class="btn btn-primary">تعديل</a>
                    </div>
                    @endif
                @endif
                        <div class="litter litter-profile" >

                            <span>{{$litterAuth}}</span>
                @if($adminRole)
                        <div class="card-title d-flex align-items-center gap-2 " title="مشرف في الموقع ">
                            <span class="material-symbols-outlined icon-admin-profile rounded-circle">
                                admin_panel_settings
                            </span>
                        </div>
                    @else
                        <div class=" d-flex align-items-center gap-2 user-admin " title="مستخدم في الموقع ">
                            <span class="material-symbols-outlined icon-admin-profile rounded-circle person">
                                person
                            </span>
                        </div>
                @endif

                        </div>

                  </div>
                </div>
              </div>
