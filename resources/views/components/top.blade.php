

  <a href="#" class="to-top rounded-circle" style="z-index: 13">
<span class="material-symbols-outlined ">
expand_less
</span>
  </a>




<script>
  const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})
</script>
