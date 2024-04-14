<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li <?php if($page == "Home") echo "class='active'";?>><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li <?php if($page == "ATK") echo "class='active'";?>><a class="nav-link scrollto" href="atk.php">ATK</a></li>
          <li <?php if($page == "Banner") echo "class='active'";?>><a class="nav-link scrollto" href="banner.php">Banner</a></li>
          <li <?php if($page == "Cetak") echo "class='active'";?>><a class="nav-link scrollto" href="cetak.php">Cetak</a></li>
          <li <?php if($page == "Desain") echo "class='active'";?>><a class="nav-link scrollto" href="desain.php">Desain</a></li>
          <li class="dropdown"><a href="#"><span>Form</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Form Undangan</a></li>
              <li><a href="https://forms.gle/Gvm1t2ZuJx5esX7p7" target="_blank">Form Nama Bayi</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="sablon.php">Sablon</a></li>
          <li class="dropdown"><a href="#"><span>Undangan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="erba.php">Erba</a></li>
              <li><a href="falah.php">Falah</a></li>
              <li><a href="kabinet.php">Kabinet</a></li>
              <li><a href="undangan-kita.php">Undangan Kita</a></li>
              <li><a href="website.php">Website</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="https://internet.ravaastudio.my.id" target="_blank">Ravaa.Net</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      
    </div>
</header><!-- End Header -->