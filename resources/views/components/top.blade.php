<style>
.to-top {
  background: white;
  position: fixed;
  bottom: 16px;
  right:32px;
  width:50px;
  height:50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size:32px;
  color:#1f1f1f;
  text-decoration: none;
  opacity:0;
  pointer-events: none;
  transition: all .4s;
}

.to-top.active {
  bottom:32px;
  pointer-events: auto;
  opacity:1;
}</style>

  <a href="#" class="to-top">
<span class="material-symbols-outlined">
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
})</script>

