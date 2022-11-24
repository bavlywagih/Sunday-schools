<div class="post-actions mt-4 mb-3 d-flex items-center">
  @auth
    @if ($checkuser)
        <a href="{{$edit}}"><span class="like material-symbols-outlined text-dark">edit</span></a>
        <a href="{{$delete}}" ><span class="material-symbols-outlined  text-dark">Delete</span></a>
    @endif
    @endauth
        <input   style="display: none;" value="http://127.0.0.1:8000/post/{{$postlink}}" id="myInput{{$postlink}}">
        <button class="border-0 bg-white "  onclick="myFunction{{$postlink}}()">
            <span class="material-symbols-outlined ms-2">share</span>
        </button>

</div>





<script>
function myFunction{{$postlink}}() {
  var copyText = document.getElementById("myInput{{$postlink}}");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  // alert("Copied the text: " + copyText.value);
}
</script>
