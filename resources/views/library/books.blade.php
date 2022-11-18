                    <!-- book -->
                    <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header d-flex">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">انشاء كتاب</h1>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="{{ $createbook }}" method="POST">
                                @csrf
                                <label>اسم الكتاب</label>
                                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="اسم تصنيف الكتب">
                                <label>رابط الكتاب</label>
                                <input type="url" class="form-control" id="floatingInput" name="url" placeholder="رابط الكتاب">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-primary">حفظ</button>
                            </div>
                        </form>
                    </div>
                      </div>
                    </div>
