<?php

$title = "Laman Dashboard";
$favicon = "./assets/icons/library-16.png";
include_once "./template/header.php";
include_once "./template/footer.php";
include_once "./template/navbar.php";

?>

<main class="lg:ml-80 max-lg:mt-20 sm:p-8 ">
  <div id="container-book-list" class="grid max-[300px]:grid-cols-1 max-sm:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 lg:gap-x-4 lg:gap-y-8 max-lg:gap-x-2 max-lg:gap-y-4 max-w-7xl mx-auto max-lg:pt-4 ">
    <a class="grid-items" href="book.php?">
      <div class="w-full skeleton overflow-y-hidden max-h-60">
        <img src="./assets/buku1.jpg" class="w-full">
      </div>
      <div class="p-4">
        <div class="text-sm mb-2">G. Dani</div>
        <div class="text-sm poppins-semibold mb-3 text-primary">Keep Up With Us!</div>
        <div class="italic text-sm leading-relaxed text-warning">Status: <span>dipinjam</span></div>
      </div>
    </a>

    <a class="grid-items" href="book.php">
      <div class="w-full skeleton overflow-y-hidden max-h-60">
        <img src="./assets/buku2.jpg" class="w-full">
      </div>
      <div class="p-4">
        <div class="text-sm mb-2">Rintik Sedu</div>
        <div class="text-sm poppins-semibold mb-3 text-primary">Kata</div>
        <div class="italic text-sm leading-relaxed text-success ">Status: <span>tersedia</span></div>
      </div>
    </a>    
    
    <a class="grid-items" href="book.php?">
      <div class="w-full skeleton overflow-y-hidden max-h-60">
        <img src="./assets/buku3.jpg" class="w-full">
      </div>
      <div class="p-4">
        <div class="text-sm mb-2">Tere Liye</div>
        <div class="text-sm poppins-semibold mb-3 text-primary">Si Anak Pintar</div>
        <div class="italic text-sm leading-relaxed text-success">Status: <span>tersedia</span></div>
      </div>
    </a>
  </div>

  <div id="container-add-book" class="w-full max-w-7xl mx-auto hidden pt-8 ">
    <div class="text-4xl max-sm:text-3xl text-center poppins-bold text-primary px-4">
      Tambahkan Buku Baru
    </div>
    <div class="divider"></div>
    <form action="" class="w-full max-w-xl mx-auto mt-8 max-lg:px-4">
      <label class="">Masukan gambar buku</label>
      <input type="file" class="file-input file-input-bordered file-input-primary w-full my-2 lg:my-4" />
      <div class="divider"></div>

      <label >Masukan judul buku</label>
      <input type="text" placeholder="Judul Buku" class="input input-bordered input-primary w-full my-2 lg:my-4" /> 
      <div class="divider"></div>

      <label >Masukan penulis buku</label>
      <input type="text" placeholder="Penulis" class="input input-bordered input-primary w-full my-2 lg:my-4" />
      <div class="divider"></div>

      <label >Masukan penerbit buku</label>
      <input type="text" placeholder="Penerbit" class="input input-bordered input-primary w-full my-2 lg:my-4" />
      <div class="divider"></div>

      <label >Masukan nomor ISBN</label>
      <input type="number" value="9786235266312" class="input input-bordered input-primary w-full my-2 lg:my-4" />
      <div class="divider"></div>

      <label >Masukan tahun terbit</label>
      <input type="number" min="1900" max="2099" value="2016" class="input input-bordered input-primary w-full my-2 lg:my-4" />
      <div class="divider"></div>

      <label >Masukan deskripsi buku</label>
      <textarea class="textarea textarea-primary my-2 lg:my-4 block w-full" placeholder="Deskripsi buku"></textarea>
      <div class="divider"></div>

      <input type="submit" class="btn btn-primary mb-20" value="Tambahkan">
    </form>
  </div>
</main>

<script>
  const btnBookList = document.getElementById("btn-book-list");
  const btnAddBook = document.getElementById("btn-add-book");
  const containerBookList = document.getElementById("container-book-list");
  const containerAddBook = document.getElementById("container-add-book");

  if (sessionStorage.getItem("opened")) {
    
  
    if (sessionStorage.getItem("opened") != "container-book-list") {
      containerBookList.classList.add("hidden");
      containerAddBook.classList.remove("hidden");
    }
  }

  btnBookList.addEventListener("click", () => {
    sessionStorage.setItem("opened", "container-book-list");
    if (sessionStorage.getItem("opened") == "container-book-list" && containerBookList.classList.contains("hidden") ) {
      containerAddBook.classList.add("hidden");
      containerBookList.classList.remove("hidden");
    }
  })

  btnAddBook.addEventListener("click", () => {
    sessionStorage.setItem("opened", "container-add-book");
    if (sessionStorage.getItem("opened") == "container-add-book" && containerAddBook.classList.contains("hidden") ) {
      containerBookList.classList.add("hidden");
      containerAddBook.classList.remove("hidden");
    }
  })
</script>

