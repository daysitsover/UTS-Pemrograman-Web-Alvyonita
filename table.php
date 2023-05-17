<style type="text/css">
  .header {
    background-color: lightblue;
    color: black;
    font-size: 20px;
    text-align: center;
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
  <title>Data Siswa</title>

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
      <a href="#joinnow" class="btn btn-primary px-4">Join Class</a>
  </div>
  </nav>
  </div><br>
  <!-- Navbar End -->

  <!-- Data Tabel Start-->
  <a href="index2.php" class="btn btn-primary px-4">Back Home</a><br><br>
  <h3>Data Siswa Bbyongari Bimbel</h3><br>

  <table width='80%' border=1>

    <tr class="header">
      <th>No</th>
      <th>ID Siswa</th>
      <th>Nama Lengkap</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Program (Class)</th>
      <th>Tingkat</th>
      <th>No Hp</th>
      <th>Action</th>
    </tr>

    <?php
    $i = 1;
    while ($user_data = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $i . "</td>";
      echo "<td>" . $user_data['id'] . "</td>";
      echo "<td>" . $user_data['nama'] . "</td>";
      echo "<td>" . $user_data['ttl'] . "</td>";
      echo "<td>" . $user_data['jenkel'] . "</td>";
      echo "<td>" . $user_data['alamat'] . "</td>";
      echo "<td>" . $user_data['program'] . "</td>";
      echo "<td>" . $user_data['tingkat'] . "</td>";
      echo "<td>" . $user_data['nohp'] . "</td>";
      echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
      $i++;
    }
    ?>
  </table>
  <!-- Data Tabel End-->

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