<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kemal's Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style_web.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black">
      <div class="container">
        <a class="navbar-brand white-text" href="#">
          <img src="Profile Picture.png" class="rounded-rectangle" width="50" height="50" />
          <span style="font-weight: 900">Kemal's Page</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#Home">Overview</a>
            <a class="nav-link" href="#About">About</a>
            <a class="nav-link" href="#Experience">Experience</a>
            <a class="nav-link" href="#Projects">Projects</a>
            <a class="nav-link" href="#Contact">Contact Me</a>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Home Content with Black Background -->
    <section id="Home" class="container-fluid bg-black text-white" style="margin-top: 60px;">
      <div class="row">
        <div class="col-8">
          <div class="p-5">
            <h1><span style="font-size: 36px; font-weight: 700;">Hai, Selamat Datang!</span></h1>
            <p>Perkenalkan, saya Thariq Kemal Hassan. Kemal adalah mahasiswa Semester 3 Prodi Sistem Informasi Institut Teknlogi Sepuluh Nopember. Saat ini Kemal sedang mempelajari ilmu mengenai Pemrograman Web. Laman ini adalah informasi mengenai informasi data diri. Selamat membaca!</p>
            <a class="btn btn-white" href="#Contact">Contact Me</a>
            <a class="btn btn-gray" href="#About">About</a>
          </div>
        </div>
        <div class="col">
          <img src="Ava.png" class="img-fluid" alt="Avatar" />
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,0L34.3,32C68.6,64,137,128,206,154.7C274.3,181,343,171,411,181.3C480,192,549,224,617,218.7C685.7,213,754,171,823,154.7C891.4,139,960,149,1029,154.7C1097.1,160,1166,160,1234,144C1302.9,128,1371,96,1406,80L1440,64L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
    <!-- Akhir Home Content -->

<!-- Halaman About -->
<section id="About">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h2><span style="font-size: 36px; font-weight: 700;">About Me</span></h2>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-md">
        <img src="Profile Picture.png" class="rounded-rectangle img-fluid" alt="Foto Profil" style="max-width: 200px; margin: 0 auto;" />
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p>Saya adalah mahasiswa yang memiliki kesukaan di bidang bisnis dan teknologi. Saat ini saya bercita-cita menjadi seorang IT Consultant maupun iOS Developer.</p>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L60,101.3C120,107,240,117,360,122.7C480,128,600,128,720,144C840,160,960,192,1080,181.3C1200,171,1320,117,1380,90.7L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
</section>
<!-- Akhir About -->

<!-- Halaman Experience -->
<section id="Experience" style="margin-bottom: 20px;"> <!-- Tambahkan margin-bottom di sini -->
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h2 class="mb-4"><span style="font-size: 36px; font-weight: 700;">Experience</span></h2>
      </div>
    </div>
    <div class="row justify-content-evenly">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="Awardee.jpg" class="card-img-top" alt="BMHG">
          <div class="card-body">
            <p class="card-text">Penerima Beasiswa Penuh Selama 8 Semester</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="Gemastik.jpg" class="card-img-top" alt="Gemastik">
          <div class="card-body">
            <p class="card-text">Finalis GemasTIK XVI 2023 Divisi 11 Bisnis TIK</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="ISE.jpg" class="card-img-top" alt="ISE">
          <div class="card-body">
            <p class="card-text">Marketing @ Information Systems Expo! 2023</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Experience -->
<!-- Halaman Projects -->
<section id="Projects" class="bg-white text-black" style="margin-top: 80px;">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h2 style="margin-bottom: 4rem;"><span style="font-size: 36px; font-weight: 700;">Projects</span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="project-container">
                <img src="Logo BMHG.png" class="d-block mx-auto project-logo" alt="Project 1">
                <p class="project-text">Recruiter, Interviewer & Liaison Officer Final Recruitment @Beasiswa Mahaghora 2023</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="project-container">
                <img src="Logo Mayasi.png" class="d-block mx-auto project-logo" alt="Project 2">
                <p class="project-text">Executor Live Shopping Mayasi @Tiktok</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="project-container">
                <img src="Logo FlexiTrip.png" class="d-block mx-auto project-logo" alt="Project 3">
                <p class="project-text">CMO @FlexiTrip GemasTIK XVI</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#projectCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black;"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#projectCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="color: black;"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Projects -->
<!-- Halaman Contact Us -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,96L60,101.3C120,107,240,117,360,122.7C480,128,600,128,720,144C840,160,960,192,1080,181.3C1200,171,1320,117,1380,90.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
<section id="Contact" class="bg-black text-white" style="margin-bottom: 0px;"> <!-- Tambahkan margin-bottom di sini -->
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h2><span style="font-size: 36px; font-weight: 700;">Contact Me</span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form id="contactForm" novalidate>
          <div class="mb-3">
            <input type="text" class="form-control" id="name" placeholder="Nama" required pattern="[A-Za-z\s]+" title="Nama tidak boleh mengandung angka">
            <div class="invalid-feedback">
              Harap isi nama (tanpa angka).
            </div>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" id="email" placeholder="Email" required>
            <div class="invalid-feedback">
              Harap isi alamat email yang valid.
            </div>
          </div>
          <div class="mb-3">
            <textarea class="form-control" id="message" rows="4" placeholder="Isi Pesan" required></textarea>
            <div class="invalid-feedback">
              Harap isi pesan.
            </div>
          </div>
          <button type="button" class="btn btn-white" id="submitBtn">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Modal untuk Nama -->
<div class="modal fade" id="nameModal" tabindex="-1" aria-labelledby="nameModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nameModalLabel">Nama Tidak Valid</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Nama harus diisi tanpa angka.
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Email -->
<div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="emailModalLabel">Email Tidak Valid</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Harap isi alamat email yang valid.
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Pesan -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="messageModalLabel">Pesan Tidak Valid</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Pesan harus diisi.
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Notifikasi Berhasil -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Pesan Berhasil Dikirim</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Pesan Anda telah berhasil dikirim.
      </div>
    </div>
  </div>
</div>


<!-- Akhir Contact Us -->
<!-- Halaman Footer -->
<div class="footer">
  <div class="footer-content">
    <div class="logo">Made with ❣️ by Kemal</div>
    <div class="copyright">© 2023 Thariq Kemal Hassan</div>
    <div class="links d-none d-lg-flex">
      <div class="footer-link"><a href="https://www.instagram.com/mal.kem.al" target="_blank" style="text-decoration: none; color: inherit;">Instagram</a></div>
      <div class="footer-link"><a href="https://www.linkedin.com/in/thariqkemalhassan" target="_blank" style="text-decoration: none; color: inherit;">Linkedin</a></div>
      <div class="footer-link"><a href="https://medium.com/@thariqkemalhassan" target="_blank" style="text-decoration: none; color: inherit;">Medium</a></div>
      <div class="footer-link"><a href="https://www.behance.net/33thahassan" target="_blank" style="text-decoration: none; color: inherit;">Behance</a></div>
    </div>
  </div>
</div>
<!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
