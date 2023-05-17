<style type="text/css">
  .header {
    background-color: orange;
  }
</style>
<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM datasiswa ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>UTS Alvyonita C | 012021070004</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Flaticon Font -->
  <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar Start -->
  <div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
      <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
        <i class="flaticon-043-teddy-bear"></i>
        <span class="text-primary">Bbyongari Bimbel</span>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="index2.php" class="nav-item nav-link active">Home</a>
          <a href="about.php" class="nav-item nav-link">About</a>
          <a href="class.php" class="nav-item nav-link">Classes</a>
          <a href="team.php" class="nav-item nav-link">Teachers</a>
        </div>
        <a href="contact.php" class="nav-item nav-link">Contact</a>
      </div>
      <div px-41>
        <a href="add2.php" class="btn btn-primary px-4">Join Class!</a>

      </div>

  </div>
  </nav>
  </div>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
      <div class="col-lg-6 text-center text-lg-left">
        <h4 class="text-white mb-4 mt-5 mt-lg-0">Skill Learning Center</h4>
        <h1 class="display-3 font-weight-bold text-white">
          Add and Learn New Skills
        </h1>
        <p class="text-white mb-4">
          Tersedia untuk kalian yang tidak memiliki waktu untuk belajar atau
          mengembangkat kalian. Kami hadir untuk sebagai solusi
        </p>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <img class="img-fluid mt-5" src="img/awal.jpg" alt="" />
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Facilities Start -->
  <div class="container-fluid pt-5">
    <div class="container pb-3">
      <div class="row">
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Music Class</h4>
            <p class="m-0">
              Kelas "Musik dan Menyanyi" bertujuan untuk memberikan pemahaman dan pengalaman dalam bidang musik dan bernyanyi kepada peserta didik. Di dalam kelas ini, peserta didik akan belajar tentang kreativitas musikal, teknik vokal, interpretasi lagu, pengenalan alat musik, kerjasama tim dalam musik, penampilan panggung, pembuatan aransemen musik, pengembangan bakat musikal, serta pengenalan genre musik yang berbeda.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Arts Class</h4>
            <p class="m-0">
              Di dalam kelas ini, peserta didik akan belajar tentang seni rupa, seni lukis. Selain itu, peserta didik juga akan mempelajari sejarah seni dan budaya, estetika, dan kritik seni. Peserta didik akan diberikan kesempatan untuk meningkatkan keterampilan mereka dalam menggambar, melukis, memahat, mencetak, dan membuat karya seni multimedia melalui latihan dan proyek-proyek kreatif.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Cooking Class</h4>
            <p class="m-0">
              Di dalam kelas ini, peserta didik akan mempelajari tentang bahan makanan, teknik memasak, teknik memanggang, penyajian makanan, dan higiene makanan. Peserta didik akan diajarkan cara memasak berbagai hidangan dari makanan pembuka, makanan utama, hingga makanan penutup, serta cara membuat kue-kue yang beragam.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Facilities Start -->

  <!-- About Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <img class="img-fluid rounded mb-5 mb-lg-0" src="img/teens.jpg" alt="" />
        </div>
        <div class="col-lg-7">
          <p class="section-title pr-5">
            <span class="pr-2">Learn About Us</span>
          </p>
          <h1 class="mb-4">Best Class For You</h1>
          <p>
            Kelas yang ditawarkan akan memberikan banyak manfaat bagi peserta didik. Selain meningkatkan keterampilan, kelas ini juga dapat membantu peserta didik untuk meningkatkan kreativitas, kepercayaan diri, dan kemampuan berkomunikasi. Dalam kelas ini, peserta didik akan diajarkan teknik-teknik yang efektif, serta diberikan kesempatan untuk berlatih dan menampilkan bakat mereka.
          </p>
          <div class="row pt-2 pb-4">
            <div class="col-6 col-md-4">
              <img class="img-fluid rounded" src="img/awal.jpg" alt="" />
            </div>
            <div class="col-6 col-md-8">
              <ul class="list-inline m-0">
                <li class="py-2 border-top border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Praktis
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Interaktif
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Produktif
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Class Start -->
  <div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Our Class</span>
        </p>
        <h1 class="mb-4">Kelas Apa Favoritmu?</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="img/a4.jpg" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title">Art Class</h4>
              <p class="card-text">
                Kelas ini memuat dua program, yaitu Drawing dan Painting
              </p>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Total Seats</strong>
                </div>
                <div class="col-6 py-1">20 Seats</div>
              </div>
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Class Time</strong>
                </div>
                <div class="col-6 py-1">08:00 - 10:00</div>
              </div>
              <div class="row">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Biaya</strong>
                </div>
                <div class="col-6 py-1">$20.21 / Month</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="img/m2.jpg" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title">Music Class</h4>
              <p class="card-text">
                Dalam kelas ini ada dua program yang diajarkan, yaitu Musik dan Menyanyi
              </p>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Total Seats</strong>
                </div>
                <div class="col-6 py-1">20 Seats</div>
              </div>
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Class Time</strong>
                </div>
                <div class="col-6 py-1">08:00 - 10:00</div>
              </div>
              <div class="row">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Biaya</strong>
                </div>
                <div class="col-6 py-1">$20.21 / Month</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="img/c1.jpg" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title">Cooking Class</h4>
              <p class="card-text">
                Dalam kelas ini ada dua program yang diajarkan, yaitu Memasak dan Memanggang
              </p>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Total Seats</strong>
                </div>
                <div class="col-6 py-1">20 Seats</div>
              </div>
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Class Time</strong>
                </div>
                <div class="col-6 py-1">08:00 - 10:00</div>
              </div>
              <div class="row">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Biaya</strong>
                </div>
                <div class="col-6 py-1">$20.21 / Month</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Class End -->

  <!-- Registration Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
          <p class="section-title pr-5">
            <span class="pr-2">Book A Seat</span>
          </p>
          <h1 class="mb-4">Book A Seat!</h1>
          <p>
            Jika anda <i>booking</i> awal pendaftaran, maka anda akan mendapat banyak benefit dan beberapa barang tambahan.
          </p>
          <ul class="list-inline m-0">
            <li class="py-2">
              <i class="fa fa-check text-success mr-3"></i>Mendapat materi ekstra (berbentuk fisik maupun pdf)
            </li>
            <li class="py-2">
              <i class="fa fa-check text-success mr-3"></i>Mendapat potongan harga 15%
            </li>
            <li class="py-2">
              <i class="fa fa-check text-success mr-3"></i>Bisa memilih kelas
            </li>
          </ul>
        </div>
        <div class="col-lg-5">
        </div>
      </div>
    </div>
  </div>

  <!-- Team Start -->
  <div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Our Teachers</span>
        </p>
        <h1 class="mb-4">Meet Our Teachers</h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="img/han.png" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Handika Atmaja</h4>
          <i>Music Teacher</i>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="img/felix.png" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Firman Mahendra</h4>
          <i>Cooking Teacher</i>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="img/hyunjin.png" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Hwang Diandra</h4>
          <i>Art Teacher</i>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
          <div class="container p-0">
            <div class="text-center pb-2">
              <p class="section-title px-5">
                <span class="px-2">Testimonial</span>
              </p>
              <h1 class="mb-4">Apa Kata Mereka?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item px-3">
                <div class="bg-light shadow-sm rounded mb-4 p-4">
                  <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                  Keren sih kelasnya! Dapet materi lengkap dan banyak prakteknya juga. Apalagi banyak temen-temen yang antusianya tinggi, makin keren pokoknya! ^_^
                </div>
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/ryujin.jpg" style="width: 70px; height: 70px" alt="Image" />
                  <div class="pl-3">
                    <h5>Ardhiya Ryukaa</h5>
                    <i>Music Class | Tingkat III</i>
                  </div>
                </div>
              </div>
              <div class="testimonial-item px-3">
                <div class="bg-light shadow-sm rounded mb-4 p-4">
                  <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                  Wajib kursus disini sih kalo kata aku. Mentor nya keren-keren! Dari yang ga bisa apa-apa sampe yang mau ke jenjang intermediate juga bisa lho kursus disini. Mode belajarnya juga sangat fun.
                </div>
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/yunho.jpg" style="width: 70px; height: 70px" alt="Image" />
                  <div class="pl-3">
                    <h5>Yohanes Abimanyu</h5>
                    <i>Cooking Class | Tingkat II</i>
                  </div>
                </div>
              </div>
              <div class="testimonial-item px-3">
                <div class="bg-light shadow-sm rounded mb-4 p-4">
                  <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                  Ini bimbel rekomendasi banget. bagi kalian yang bingung cari tempat untuk ngembangin bakat atau skill kalian. Bbyongari Bimbel jawabannya!
                </div>
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/yeji.png" style="width: 70px; height: 70px" alt="Image" />
                  <div class="pl-3">
                    <h5>Yeshaa Jinnie</h5>
                    <i>Art Class | III</i>
                  </div>
                </div>
              </div>
              <div class="testimonial-item px-3">
                <div class="bg-light shadow-sm rounded mb-4 p-4">
                  <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                  Kuy daftar di Bbyongari Bimbel! banyak lulusan yang udah berhasil diluar sana, dan aku ingin menjadi salah satu dari mereka!
                </div>
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/jongho.jpg" style="width: 70px; height: 70px" alt="Image" />
                  <div class="pl-3">
                    <h5>Choi Jericco</h5>
                    <i>Music Class | Tingkat I</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
          <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
              <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px">
                <i class="flaticon-043-teddy-bear"></i>
                <span class="text-white">Bbyongari Bimbel</span><br><br>
              </a>
              <p>
                Kami mendirikan Bbyongari bimbel ini agar dapat membantu mereka yang kesulitan mencari wadah pengembangan bakat/skill. Kami menyajikan materi degan sangat ringkas, sehingga mereka mampu mengikuti tiap tahap yang kami berikan.
              </p>
              <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
              <h3 class="text-primary mb-4">Get In Touch</h3>
              <div class="d-flex">
                <h4 class="fa fa-map-marker-alt text-primary"></h4>
                <div class="pl-3">
                  <h5 class="text-white">Address</h5>
                  <p>Seongnae-ro, 성내제1동 Gangdong-gu, Surakarta</p>
                </div>
              </div>
              <div class="d-flex">
                <h4 class="fa fa-envelope text-primary"></h4>
                <div class="pl-3">
                  <h5 class="text-white">Email</h5>
                  <p>bbyongarinews@jypent.com</p>
                </div>
              </div>
              <div class="d-flex">
                <h4 class="fa fa-phone-alt text-primary"></h4>
                <div class="pl-3">
                  <h5 class="text-white">Phone</h5>
                  <p>+012 345 67890</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
              <h3 class="text-primary mb-4">Quick Links</h3>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="index2.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                <a class="text-white mb-2" href="class.php"><i class="fa fa-angle-right mr-2"></i>Our Classes</a>
                <a class="text-white mb-2" href="team.php"><i class="fa fa-angle-right mr-2"></i>Our Teachers</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
              </div>
            </div>
          </div>
          <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2)">
            <p class="m-0 text-center text-white">
              &copy;
              <a class="text-primary font-weight-bold" href="#">Bbyongari Bimbel</a>.
              All Rights Reserved.
              <br />2018 - 2023
            </p>
          </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>