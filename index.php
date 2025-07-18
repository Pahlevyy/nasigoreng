<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <!-- bootstrap icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Nasi goreng identity</title>
</head>

<body style="background-color: #f5c56b;">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm" style="background-color: #C68642">
    <div class="container-fluid fw-bold px-2 px-sm-3">
      <a class="navbar-brand" href="#">Nasi <span>Goreng</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="#about">Tentang kami</a></li>
          <li class="nav-item"><a class="nav-link active" href="#Menu">Menu</a></li>
          <li class="nav-item"><a class="nav-link active" href="#contact">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ending -->
  <?php if ($status == 'sukses'): ?>
    <div class="alert alert-success">Pesanan berhasil dikirim!</div>
  <?php elseif ($status == 'gagal'): ?>
    <div class="alert alert-danger">Pesanan gagal. Silakan coba lagi.</div>
  <?php endif; ?>

  <!-- hero section -->
  <div class="card position-relative shadow-sm">
    <img src="nasigoreng2.jpg" class="card-img-top" alt="Nasi goreng" style="width: 100%; height: 400px; object-fit: cover">
    <div class="position-absolute top-50 start-50 translate-middle text-white text-center hero-overlay" data-aos="fade-up-left" data-aos-delay="500">
      <h1 class="display-4 fw-bold">Selamat <span>Datang!</span></h1>
      <p class="lead fw-bold">Ini adalah website nasi goreng kami</p>
    </div>
  </div>
  <!-- ending hero section -->

  <!-- about section -->
  <section id="about" class="py-5 position-relative fw-bold" data-aos="fade-right" data-aos-delay="500">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col">
          <h2>Tentang Kami</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-6 text-center">
        <div class="col-md-8">
          <p>Nasi goreng adalah hidangan nasi yang digoreng dengan bumbu dan bahan tambahan seperti sayuran, daging, atau telur. Hidangan ini sangat populer di Indonesia dan sering disajikan sebagai sarapan atau makan malam. Nasi goreng memiliki cita rasa yang kaya dan dapat disesuaikan dengan selera masing-masing.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ending about -->

  <!-- menu section -->
  <section id="Menu" class="py-5" data-aos="fade-left" data-aos-delay="500">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col">
          <h2>Menu Kami</h2>
        </div>
      </div>
      <div class="row gy-4">
        <!-- Item 1 -->
        <div class="col-12 col-md-4">
          <div class="d-flex flex-column flex-md-row align-items-center">
            <img src="nasigoreng.jpg" alt="Nasi goreng" class="img-fluid rounded menu-image mb-3 mb-md-0 me-md-3"
              data-bs-toggle="modal" data-bs-target="#imageModal"
              data-img="nasigoreng.jpg" data-title="Nasi Goreng Telur dengan telur dadar atau telur ceplok" data-desc="Nasi goreng telur adalah hidangan nasi goreng yang ditambah dengan telur. Telur dapat digoreng atau dicampur dengan nasi goreng. Hidangan ini banyak disajikan sebagai menu utama di restoran-restoran Indonesia.">
            <div class="text-center text-md-start">
              <h5 class="fw-bold mb-1">Nasi Goreng Telur</h5>
              <p class="mb-0">Rp12.500</p>
            </div>
          </div>
        </div>
        <!-- Item 2 -->
        <div class="col-12 col-md-4">
          <div class="d-flex flex-column flex-md-row align-items-center">
            <img src="nasgorudang.jpg" alt="Nasi goreng udang" class="img-fluid rounded menu-image mb-3 mb-md-0 me-md-3"
              data-bs-toggle="modal" data-bs-target="#imageModal"
              data-img="nasgorudang.jpg" data-title="Nasi Goreng Udang" data-desc="Nasi goreng udang dengan 3 udang ukuran besar dimasak sangat matang sangat cocok untuk pecinta seafood.">
            <div class="text-center text-md-start">
              <h5 class="fw-bold mb-1">Nasi Goreng Udang</h5>
              <p class="mb-0">Rp19.000</p>
            </div>
          </div>
        </div>
        <!-- Item 3 -->
        <div class="col-12 col-md-4">
          <div class="d-flex flex-column flex-md-row align-items-center">
            <img src="3.jpg" alt="Nasi goreng Jawa" class="img-fluid rounded menu-image mb-3 mb-md-0 me-md-3"
              data-bs-toggle="modal" data-bs-target="#imageModal"
              data-img="3.jpg" data-title="Nasi Goreng Jawa" data-desc="Nasi goreng Jawa ini punya ciri khas rasa manis gurih yang seimbang. Bumbunya yang mlekoh mantap membuat nasi goreng ini enak hingga suapan terakhir.">
            <div class="text-center text-md-start">
              <h5 class="fw-bold mb-1">Nasi Goreng Jawa</h5>
              <p class="mb-0">Rp15.000</p>
            </div>
          </div>
        </div>
        <!-- Item 4 -->
        <div class="col-12 col-md-4">
          <div class="d-flex flex-column flex-md-row align-items-center">
            <img src="4.jpg" alt="Nasi goreng cumi" class="img-fluid rounded menu-image mb-3 mb-md-0 me-md-3"
              data-bs-toggle="modal" data-bs-target="#imageModal"
              data-img="4.jpg" data-title="Nasi Goreng Cumi" data-desc="Dengan cita rasa yang khas, nasi goreng cumi ini menjadi pilihan yang sempurna bagi pecinta seafood. Cumi yang segar dan bumbu yang meresap membuat hidangan ini sangat lezat dengan nasi berwarna hitam.">
            <div class="text-center text-md-start">
              <h5 class="fw-bold mb-1">Nasi Goreng Cumi</h5>
              <p class="mb-0">Rp25.000</p>
            </div>
          </div>
        </div>
        <!-- Item 5 -->
        <div class="col-12 col-md-4">
          <div class="d-flex flex-column flex-md-row align-items-center">
            <img src="5.jpg" alt="Nasi goreng kambing" class="img-fluid rounded menu-image mb-3 mb-md-0 me-md-3"
              data-bs-toggle="modal" data-bs-target="#imageModal"
              data-img="5.jpg" data-title="Nasi Goreng Kambing" data-desc="Nasi goreng kambing adalah hidangan nasi goreng yang ditambahkan daging kambing sebagai bahan utama. Daging kambing yang empuk dan bumbu yang kaya memberikan cita rasa yang khas pada hidangan ini.">
            <div class="text-center text-md-start">
              <h5 class="fw-bold mb-1">Nasi Goreng Kambing</h5>
              <p class="mb-0">Rp30.000</p>
            </div>
          </div>
        </div>
        <!-- Item 6 -->
        <div class="col-12 col-md-4">
          <div class="d-flex flex-column flex-md-row align-items-center">
            <img src="6.jpg" alt="Nasi goreng suki" class="img-fluid rounded menu-image mb-3 mb-md-0 me-md-3"
              data-bs-toggle="modal" data-bs-target="#imageModal"
              data-img="6.jpg" data-title="Nasi Goreng Suki" data-desc="Nasi goreng suki adalah hidangan nasi goreng yang ditambahkan bahan-bahan suki seperti sayuran, daging, dan seafood. Hidangan ini memiliki cita rasa yang segar dan lezat.">
            <div class="text-center text-md-start">
              <h5 class="fw-bold mb-1">Nasi Goreng Suki</h5>
              <p class="mb-0">Rp50.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ending menu -->

  <!-- contact -->
  <section id="contact" data-aos="fade-left" data-aos-delay="500">
    <div class="container">
      <div class="row text-center">
        <div class="col mt-4">
          <h2>Kontak kami</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-md-8">
          <form action="proses_pesan.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Pembeli</label>
              <input type="text" class="form-control" id="name" name="nama" required>
            </div>
            <div class="mb-3">
              <label for="telepon" class="form-label">No Telepon</label>
              <input type="number" class="form-control" id="telepon" name="telepon" required>
            </div>
            <div class="mb-3 fs-6">
              <textarea name="catatan" class="form-control" placeholder="request/misal nasi lebih pedas dsb" style="height: 100px;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ending contact -->

  <!-- footer -->
  <footer class="bg-dark text-white text-center py-4 mt-5" data-aos="fade-down" data-aos-delay="500">
    <div class="social">
      <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
      <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
      <a href="https://www.tiktok.com/"><i class="bi bi-tiktok"></i></a>
    </div>
    <p>Created by mohammad Reza</p>
  </footer>
  <!-- ending footer -->

  <!-- Modal -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-dark text-white">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="imageModalLabel"></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex flex-column flex-md-row align-items-center justify-content-center text-white text-center text-md-start">
          <img id="modalImage" src="" class="img-fluid rounded mb-3 mb-md-0 me-md-4" alt="Preview" style="max-width: 400px;">
          <div>
            <h5 id="imageModalLabel" class="mb-2"></h5>
            <p id="modalDesc" class="mb-0"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    const imageModal = document.getElementById('imageModal');
    imageModal.addEventListener('show.bs.modal', function(event) {
      const img = event.relatedTarget;
      const src = img.getAttribute('data-img');
      const title = img.getAttribute('data-title');
      const desc = img.getAttribute('data-desc');

      const modalImg = imageModal.querySelector('#modalImage');
      const modalTitle = imageModal.querySelector('#imageModalLabel');
      const modalDesc = imageModal.querySelector('#modalDesc');

      modalImg.src = src;
      modalTitle.textContent = title;
      modalDesc.textContent = desc;
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>