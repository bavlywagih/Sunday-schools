
                    <div class="modal fade" id="createattendance" tabindex="-1" aria-labelledby="createSessionLabel" aria-hidden="true">
                        <form method="POST" action="/collect-attendance">
                            @csrf
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="collectAttendanceLabel">اضافه حضور الي الدروس</h1>
                                    <div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="modal-body">
                                        <label for="session-id" class="form-label">الدرس</label>
                                        <select class="form-select" id="session-id" name="session_id">
                                            <option selected value="0">تحديد الدرس</option>
                                            @foreach($sessions as $session)
                                                @if (count($session->attentances) == 0)
                                                    <option value="{{ $session->id }}">{{ $session->title }}</option>
                                                @endif
                                            @endforeach
                                        </select>

                                        <ul class="list-group mt-3">
                                            @foreach ($users as $user)
                                            <li class="list-group-item">
                                              <input class="form-check-input me-1" name="users[]" type="checkbox" value="{{ $user->id }}" id="user-{{ $user->id }}">
                                              <label class="form-check-label" for="user-{{ $user->id }}">{{ $user->username }}</label>
                                            </li>
                                            @endforeach
                                          </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="sumit" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
