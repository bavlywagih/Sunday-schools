    <!-- booksorting -->
    <div class="modal fade" id="booksortingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header d-flex">
            <h1 class="modal-title fs-5" id="exampleModalLabel">انشاء تصنيف للكتب</h1>
            <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
                @csrf
                        <div class="modal-body">
                                <label for="session-id" class="form-label">الدرس</label>
                                <select class="form-select" id="session-id" name="sorting_id">
                                    <option selected value="0">تحديد الدرس</option>
                                    @foreach($sortings as $sorting)
                                            <option value="{{ $sorting->id }}">{{ $sorting->name }}</option>
                                    @endforeach
                                </select>

                                <ul class="list-group mt-3">
                                    @foreach ($books as $book)
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" name="book_id[]" type="checkbox" value="{{ $book->id }}" id="book-{{ $book->id }}">
                                      <label class="form-check-label" for="book-{{ $book->id }}">{{ $book->name }}</label>
                                    </li>
                                    @endforeach
                                  </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="sumit" class="btn btn-success">Save changes</button>
                            </div>
                    </div>
            </form>
    </div>
      </div>
    </div>
