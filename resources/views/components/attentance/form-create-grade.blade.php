
                    <div class="modal fade" id="createGrade" tabindex="-1" aria-labelledby="createGradeLabel" aria-hidden="true">
                        <form method="POST" action="/create-grade">
                            @csrf
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="createGradeLabel">انشاء فصل جديد.</h1>
                                    <div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="grade-title" class="form-label">اسم الفصل</label>
                                            <input type="text" name="title" class="form-control" id="grade-title">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="sumit" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
