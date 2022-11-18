                    <!-- sorting -->
                    <div class="modal fade" id="sortingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header d-flex">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">انشاء تصنيف للكتب</h1>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="{{$createsorting}}" method="POST">
                                @csrf
                                <label>اسم التصنيف</label>
                                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="اسم تصنيف الكتب">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-primary">حفظ</button>
                            </div>
                        </form>
                    </div>
                      </div>
                    </div>
