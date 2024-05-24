<div class="drawer-content flex items-center lg:hidden fixed top-0 left-0 w-screen h-20 shadow-md px-8 border-b border-primary bg-base-100">
  <!-- Page content here -->
  <label for="my-drawer" class="drawer-button transition-all active:scale-80">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#470FF4" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
  </label>

</div> 
<nav class="drawer lg:drawer-open fixed left-0 w-fit">
  <input id="my-drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-side">
    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label> 
    <div class="px-8 py-10 w-80 min-h-full bg-base-100 border-r border-primary flex flex-col justify-between">
      <!-- Sidebar content here -->
      <ul class="w-full">
        <li class="px-8">
          <a href="index.php" class="flex gap-2 items-center">
            <div class="w-[80px]">
              <img src="./assets/icons/library-100.png" class="w-full rounded-full bg-base-100 skeleton">
            </div>
            <h1 class="text-3xl poppins-bold tracking-wide">SPC</h1>
          </a>
        </li>
        <div class="divider"></div>     

        <li class="mb-4">
          <form action="">
            <label class="input input-bordered flex items-center gap-2">
              <input type="text" class="grow" placeholder="Search" />
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" /></svg>
            </label>
          </form>
        </li>

        <li class="mb-2 "><button id="btn-book-list" class="btn btn-primary w-full py-2 px-4">Daftar Buku</button></li>
        <li class="mb-2 "><button id="btn-add-book" class="btn btn-primary w-full py-2 px-4">Tambah Buku</button></li>
      </ul>
      

      <div class="w-full py-10">
          <div class="flex gap-4 items-center px-4 py-2 mb-4">
            <div class="avatar">
              <div class="w-16 rounded-full skeleton">
                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
              </div>
            </div>
            <div class="w-full">
              <h1 class="text-sm mb-1 poppins-semibold">Arya Ulya Krisna</h1>
              <h1 class="text-xs">50422280</h1>
            </div>
          </div>
          <div><btn id="btn-logout" class="btn btn-outline btn-primary w-full py-2 px-4" onclick="my_modal_5.showModal()">Keluar</btn></div>
      </div> 
    </div>
  
  </div>
</nav>

<dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle flex items-center justify-center max-lg:px-8">
  <div class="modal-box p-10 max-lg:p-8 rounded-xl">
    <h3 class="poppins-bold text-xl">Logout!</h3>
    <p class="py-4 text-lg">Anda yakin untuk keluar?</p>
    <div class="modal-action">
      <form method="dialog">
        <button class="btn btn-primary mr-1">No</button>
      </form>
      <form action="logout.php" method="post">
        <input type="submit" value="Yes" class="btn btn-active btn-warning">
      </form>
    </div>
  </div>
</dialog>