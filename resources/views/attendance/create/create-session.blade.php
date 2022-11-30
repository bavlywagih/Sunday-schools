
    <div class="modal fade" id="createSession" tabindex="-1" aria-labelledby="createSessionLabel" aria-hidden="true">
        <form method="POST" action="{{route('create-session')}}">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="createSessionLabel">انشاء درس</h1>
                        <div><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="session-title" class="form-label">اسم الدرس</label>
                            <input type="text" name="title" class="form-control" id="session-title">
                        </div>
                        <label for="grade" class="form-label">الفصل</label>
                        <select class="form-select" id="grade" name="grade_id">
                            <option selected value="0">اختار الفصل</option>
                            @foreach($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer" style="justify-content: flex-start">
                        <button type="sumit" class="btn btn-success">حفظ</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
