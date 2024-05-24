<?php

$title = "Laman Login";
$favicon = "./assets/icons/library-16.png";
include_once "./template/header.php";
include_once "./template/footer.php";


?>


<div id="laman-login-img" class="w-[1000px] fixed -top-48 -left-[400px] -z-10 -translate-x-40 transition-all duration-700">
  <img src="./assets/icons/Bibliophile-bro.svg" class=" w-full">
</div>
<main class="w-full min-h-screen flex items-center justify-center scale-0 translate-y-10 duration-700 transition-all">
  
  <form action="" class="w-full max-w-md shadow-xl rounded-3xl px-8 py-10 bg-base-100/70 backdrop-blur-sm max-sm:translate-y-10">
    <div class="flex gap-2 items-center mb-6">
      <div class="w-[100px]">
        <img src="./assets/icons/library-100.png" class="w-full rounded-full bg-base-100 skeleton">
      </div>
      <h1 class="text-3xl poppins-bold tracking-wide">SPC</h1>
    </div>

    <label class="input input-bordered flex items-center gap-2 mb-4 bg-transparent">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70 max-[400px]:hidden"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
      <input type="text" class="grow" placeholder="Username" />
    </label> 
    <label class="input input-bordered flex items-center gap-2 mb-6 bg-transparent">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70 max-[400px]:hidden"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
      <input type="password" class="grow" placeholder="Password" />
    </label>
    <div class="w-full text-center">
      <input type="submit" value="Masuk" class="btn btn-primary">
    </div>
  </form>
</main>

<script>
  function setIntersection() {
    const mainObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          document.querySelector("main").classList.remove("scale-0", "translate-y-10");
          document.querySelector("#laman-login-img").classList.remove("-translate-x-40");
        }
      });
    });

    mainObserver.observe(document.querySelector("main"));
  }

  setIntersection();

</script>
  
