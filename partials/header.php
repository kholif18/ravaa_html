<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ravaa Studio | <?php echo $page; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/css/font.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/ravaa-studio.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a <?php if($page == "Home") echo "class='active'";?> class="nav-link scrollto" href="index.php">Home</a>
          </li>
          <li><a <?php if($page == "ATK") echo "class='active'";?> class="nav-link scrollto" href="atk.php">ATK</a></li>
          <li><a <?php if($page == "Banner") echo "class='active'";?> class="nav-link scrollto"
              href="banner.php">Banner</a></li>
          <li><a <?php if($page == "Cetak") echo "class='active'";?> class="nav-link scrollto"
              href="cetak.php">Cetak</a></li>
          <li><a <?php if($page == "Desain") echo "class='active'";?> class="nav-link scrollto"
              href="desain.php">Desain</a></li>
          <li class="dropdown"><a href="#"><span>Form</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Form Undangan</a></li>
              <li><a href="https://forms.gle/Gvm1t2ZuJx5esX7p7" target="_blank">Form Nama Bayi</a></li>
            </ul>
          </li>
          <li><a <?php if($page == "Sablon") echo "class='active'";?> class="nav-link scrollto"
              href="sablon.php">Sablon</a></li>
          <li class="dropdown"><a
              <?php if($page == "Erba" || $page == "Falah" || $page == "Kabinet" || $page == "Undangan Kita" || $page == "Website") echo "active"; ?>
              href="#"><span>Undangan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a <?php if($page == "Erba") echo "class='active'";?> href="erba.php">Erba</a></li>
              <li><a <?php if($page == "Falah") echo "class='active'";?> href="falah.php">Falah</a></li>
              <li><a <?php if($page == "Kabinet") echo "class='active'";?> href="kabinet.php">Kabinet</a></li>
              <li><a <?php if($page == "Undangan Kita") echo "class='active'";?> href="undangan-kita.php">Undangan
                  Kita</a></li>
              <li><a <?php if($page == "Website") echo "class='active'";?> href="website.php">Website</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="https://internet.ravaastudio.my.id" target="_blank">Ravaa.Net</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header><!-- End Header -->