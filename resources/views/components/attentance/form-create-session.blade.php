
                    <div class="modal fade" id="createSession" tabindex="-1" aria-labelledby="createSessionLabel" aria-hidden="true">
                        <form method="POST" action="/create-session">
                            @csrf
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="createSessionLabel">انشاء درس</h1>
                                    <div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="session-title" class="form-label">عنوان درس</label>
                                            <input type="text" name="title" class="form-control" id="session-title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="session-title" class="form-label">الدرس</label>
                                            <textarea id="post-editor" name="body" class="text-end" placeholder="{{Auth::user()->username}} اكتب الدرس هنا" cols="50"></textarea>
                                            @include('components.head.tinymce-config')
                                        </div>


                                        <label for="grade" class="form-label">الفصل</label>
                                        <select class="form-select" id="grade" name="grade_id">
                                            <option selected value="0">يرجي تحديد الفصل</option>
                                            @foreach($grades as $grade)
                                                <option value="{{ $grade->id }}">{{ $grade->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="sumit" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
