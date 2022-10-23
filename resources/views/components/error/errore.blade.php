
@if ($errors->any())
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast"  class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header justify-content-between">
            <div>
                <h5 class="me-auto rounded">هناك مشكلة !</h5>
            </div>

      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach    </div>
</div>
</div>

@endif
