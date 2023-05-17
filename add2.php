<html>

<head>
  <meta charset="utf-8" />
  <title>UTS Alvyonita C | 012021070004</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />
  <title>Tambah Data</title>
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
  <a href="index2.php" class="btn btn-primary px-4">Go to Home</a>
  <form action="add2.php" method="post" name="form1">
    <div class="col-lg-5">
      <div class="card border-0">
        <div class="card-header bg-secondary text-center p-4">
          <h1 class="text-white m-0">Book A Seat!</h1>
        </div>
        <div class="card-body rounded-bottom bg-primary p-5">
          <form action="add3.php" method="post" name="form1">
            <!--id-->
            <div class="form-group">
              <input name="id" type="text" class="form-control border-0 p-4" placeholder="ID Siswa" required="required" />
            </div>
            <!--nama-->
            <div class="form-group">
              <input name="nama" type="text" class="form-control border-0 p-4" placeholder="Nama Lengkap" required="required" />
            </div>
            <!--TTL-->
            <div class="form-group">
              <input name="ttl" type="date" class="form-control border-0 p-4" required="required" />
            </div>
            <!--jenkel-->
            <div class="form-group">
              <select name="jenkel" class="custom-select border-0 px-4" style="height: 47px">
                <option selected>jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <!--Alamat-->
            <div class="form-group">
              <textarea name="alamat" rows="8" col="200" class="form-control border-0 p-4" placeholder="Masukkan Alamat" required="required"></textarea>
            </div>
            <!--Program-->
            <div class="form-group">
              <select name="program" class="custom-select border-0 px-4" style="height: 47px">
                <option selected>Program</option>
                <option value="Music Class">Music Class</option>
                <option value="Cooking Class">Cooking Class</option>
                <option value="Art Class">Art Class</option>
              </select>
            </div>
            <!--Tingkat-->
            <div class="form-group">
              <select name="tingkat" class="custom-select border-0 px-4" style="height: 47px">
                <option selected>Tingkat</option>
                <option value="Tingkat I">Tingkat I</option>
                <option value="Tingkat II">Tingkat II</option>
                <option value="Tingkat III">Tingkat III</option>
              </select>
            </div>
            <!--NoHp-->
            <div class="form-group">
              <input name="nohp" type="text" class="form-control border-0 p-4" placeholder="Nomor Telepon" required="required" />
            </div>
            <div>
              <button class="btn btn-secondary btn-block border-0 py-3" name="Submit" type="submit" value="Add">
                Book Now
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </form>


  <?php

  // Check If form submitted, insert form data into users table.
  if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $jenkel = $_POST['jenkel'];
    $alamat = $_POST['alamat'];
    $program = $_POST['program'];
    $tingkat = $_POST['tingkat'];
    $nohp = $_POST['nohp'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO datasiswa(id,nama,ttl,jenkel,alamat,program,tingkat,nohp) VALUES('$id','$nama','$ttl','$jenkel','$alamat','$program','$tingkat','$nohp')");

    // Show message when user added
    echo "Data telah berhasil ditambahkan!. <a href='table.php'>Lihat Data</a>";
  }
  ?>


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