<?php

$title = "Laman Buku";
$favicon = "./assets/icons/library-16.png";
include_once "./template/header.php";
include_once "./template/footer.php";
include_once "./template/navbar.php";


?>

<main class="lg:ml-80 max-lg:mt-20 px-8 ">
  <form class="flex max-md:flex-col max-md:items-center justify-center gap-16 max-md:gap-8 items-start max-w-5xl mx-auto py-20">
    <div class="max-w-60 md:sticky md:top-0 flex items-center max-md:p-8 justify-center w-full -z-10">
      <img src="./assets/buku1.jpg" class="w-full skeleton">
    </div>
    <div class="w-full max-w-lg">
      <input type="text" class="block focus:outline focus:outline-primary bg-base-100 w-full rounded-lg" value="G. Dani">
      <input type="text" class="poppins-semibold mt-2 text-primary text-2xl block focus:outline focus:outline-primary bg-base-100 w-full rounded-lg" value="Keep Up With Us!">
      <div class="divider"></div>
      <label class="block mt-20 max-md:mt-10 mb-2 poppins-semibold">Deskripsi:</label>
      <textarea name="" class="focus:outline focus:outline-primary bg-base-100 w-full overflow-auto no-scrollbar min-h-40 rounded-lg">Keep Up with Us! merupakan fiksi sastra jenis novel karya G. Dani. Dengan gaya bercerita yang kekinian dan konflik yang sangat dekat dengan pembaca, Keep Up with Us menjadi pemenang di Wattys di ajang Wattys 2020 kategori New Adult.</textarea>
      <div class="divider"></div>

      <label class="block mt-10 poppins-semibold mb-2">Detail:</label>
      <div class="grid gap-4 grid-cols-2 max-md:grid-cols-1">
        <div>
          <div>Penerbit:</div>
          <input type="text" class="block focus:outline focus:outline-primary bg-base-100 w-full rounded-lg" value="Elex Media Komputindo">
        </div>
        <div>
          <div>Tahun Terbit:</div>
          <input type="number" min="1900" max="2099" class="block focus:outline focus:outline-primary bg-base-100 w-full rounded-lg" value="2022">
        </div>
        <div>
          <div>ISBN:</div>
          <input type="number" class="block focus:outline focus:outline-primary bg-base-100 w-full rounded-lg" value="9786230032448">
        </div>
        <div>
          <div>Status:</div>
          <div class="text-warning">Dipinjam</div>
        </div>
        <div>
          <div>Riwayat Peminjaman:</div>
        </div>
        <div>
          <ul>
            <li>Nabila Alawiyah - 51422187</li>
            <li>Dimas Febriyanto - 50422430</li>
            <li>Muhammad Faiz Rashid - 51422029</li>
            <li>Arya Ulya Krisna - 50422280</li>
          </ul>
        </div>

      </div>
      <div class="divider"></div>

      <div class="btn-container flex mt-4 gap-2">
        <input type="submit" class="btn btn-primary" value="Update">
        <div type="submit" class="btn btn-warning" onclick="my_modal_6.showModal()">Delete</div>
      </div>
    </div>
  </form>
</main>

<dialog id="my_modal_6" class="modal modal-bottom sm:modal-middle flex items-center justify-center max-lg:px-8">
  <div class="modal-box p-10 max-lg:p-8 rounded-xl">
    <h3 class="poppins-bold text-xl">Delete!</h3>
    <p class="py-4 text-lg">Anda yakin untuk menghapus buku ini?</p>

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

<script>
  const btnBookList = document.getElementById("btn-book-list");
  const btnAddBook = document.getElementById("btn-add-book");
  const containerBookList = document.getElementById("container-book-list");
  const containerAddBook = document.getElementById("container-add-book");

  btnBookList.addEventListener("click", () => {
    sessionStorage.setItem("opened", "container-book-list");
    window.location.href = "dashboard.php";
  })

  btnAddBook.addEventListener("click", () => {
    sessionStorage.setItem("opened", "container-add-book");
    window.location.href = "dashboard.php";
  })

  function textAreaAdjust(element) {
  element.style.height = "1px";
  element.style.height = (25+element.scrollHeight)+"px";
}
</script>
