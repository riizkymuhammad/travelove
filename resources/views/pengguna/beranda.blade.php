<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <Link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/beranda.css') }}">

  <-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top apalah navbar-fnt" >
  <div class="container">
    <a style="color: #707070;" class="navbar-brand navbar-fnt" href="#">Travelove</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse navbar-fnt" id="navbarResponsive">
      <ul class="navbar-nav ml-auto navbar-fnt">
        <li class="nav-item active navbar-fnt">
          <a style="color: #8B0000;" class="nav-link" href="#">Beranda
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a style="color: #8B0000;" class="nav-link navbar-fnt" href="#">Kategori</a>
        </li>
        <li class="nav-item">
          <a style="color: #8B0000;"class="nav-link navbar-fnt" href="#">Pemesanan</a>
        </li>
        <li style="color: #8B0000;"class="nav-item">
          <a style="color: #8B0000;"class="nav-link navbar-fnt" href="#">Profil</a>
        </li>
        <li style="color: #8B0000;"class="nav-item">
          <a style="color: #8B0000;" class="nav-link navbar-fnt" href="/logout" onclick="event.prevent">KELUAR</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('admin/parangtritis2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Parangtritis</h3>
          <p class="lead">Menikmati indahnya matahari terbenam di Pantai Parangtritis</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: src('/admin/prambanan.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Prambanan</h3>
          <p class="lead">Sejarah yang tak terlupakan di Prambanan Yogyakarta</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('/admin/malioboro2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Malioboro</h3>
          <p class="lead">Berbelanja, kuliner, serta menghabiskan waktu pada indahnya suasana Malioboro</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
<body class="apasih">

    <div class="row py-5">
      <div class="col-lg-12 mx-auto">
        <div class="text-white p-5 shadow-sm rounded banner">
          <h1 style="color: #000000;" class="display-4">Pilih Kategori</h1>
          <p style="color: #000000;" class="lead">Jelajahi tempat favoritmu bersama kekasih</p>
        </div>
      </div>
    </div>

  <!-- DEMO 1 -->
  <div class="container py-5">
  <div class="py-5">
    <h3 class="font-weight-bold mb-0">Kuliner</h3>
    <p class="font-italic text-muted mb-4">Lihat Lebih</p>
    <div class="row">
      <!-- DEMO 1 Item-->
      <div class="col-lg-6 mb-3 mb-lg-0">
        <div class="hover hover-1 text-white rounded"style="background-image: src('/img/gudeg.jpg')">
          <div class="hover-overlay"></div>
          <div class="hover-1-content px-5 py-4">
            <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Gudeg </span>Jogja</h3>
            <p class="hover-1-description font-weight-light mb-0">Makanan tradisional yang tidak terbantahkan kelezatannya.</p>
          </div>
        </div>
      </div>
      <!-- DEMO 1 Item-->
      <div class="col-lg-6">
        <div class="hover hover-1 text-white rounded"style="background-image: url('img/kulinerjgj.jpg')">
          <div class="hover-overlay"></div>
          <div class="hover-1-content px-5 py-4">
            <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Oleh-Oleh </span>Jogja</h3>
            <p class="hover-1-description font-weight-light mb-0">Mencoba berbagai macam makanan khas Jogja</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- DEMO 2-->
  <div class="py-5">
    <h3 class="font-weight-bold mb-0">Romantis</h3>
    <p class="font-italic text-muted mb-4">Lihat Lebih</p>
    <div class="row">
      <!-- DEMO 2 Item-->
      <div class="col-lg-6 mb-3 mb-lg-0">
        <div class="hover hover-2 text-white rounded"style="background-image: url('/img/bukitbintang.jpg')">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-5 py-4">
            <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Bukit </span>Bintang</h3>
            <p class="hover-2-description text-uppercase mb-0">Menikmati indahnya Yogyakarta di Bukit Bintang</p>
          </div>
        </div>
      </div>

      <!-- DEMO 2 Item-->
      <div class="col-lg-6">
        <div class="hover hover-2 text-white rounded"style="background-image: url('/img/pintulawu.jpg')">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-5 py-4">
            <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Pintu </span>Lawu</h3>
            <p class="hover-2-description text-uppercase mb-0">Abadikan momen berdua di Pintu Lawu</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- DEMO 3 -->
  <div class="py-5">
    <h3 class="font-weight-bold mb-0">Seni</h3>
    <p class="font-italic text-muted mb-4">Lihat Lebih</p>
    <div class="row">
      <!-- DEMO 3 Item-->
      <div class="col-lg-6 mb-3 mb-lg-0">
        <div class="hover hover-3 text-white rounded"style="background-image: url('/img/prambanan.jpg')">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">Candi </span>Prambanan</h3>
            <p class="hover-3-description small text-uppercase mb-0">Bersama menikmati indahnya karya seni Candi Prambanan </p>
          </div>
        </div>
      </div>
      <!-- DEMO 3 Item    -->
      <div class="col-lg-6">
        <div class="hover hover-3 text-white rounded" style="background-image: url('/img/affandi.jpg')">>
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">Museum </span>Affandi</h3>
            <p class="hover-3-description small text-uppercase mb-0">Melihat karya tokoh seni legendaris Jogja</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- DEMO 4 -->
  <div class="py-5">
    <h3 class="font-weight-bold mb-0">Alam</h3>
    <p class="font-italic text-muted mb-4">Lihat Lebih</p>
    <div class="row">
      <!-- DEMO 4 Item-->
      <div class="col-lg-6 mb-3 mb-lg-0">
        <div class="hover hover-4 text-white rounded"style="background-image: url('/img/Parangtritis.jpg')">
          <div class="hover-overlay"></div>
          <div class="hover-4-content">
            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light">Pantai </span>Parangtritis</h3>
            <p class="hover-4-description text-uppercase mb-0 small">Menikmati indahnya pantai Parangtritis berdua</p>
          </div>
        </div>
      </div>
      <!-- DEMO 4 Item            -->
      <div class="col-lg-6">
        <div class="hover hover-4 text-white rounded"style="background-image: url('/img/lavatour.jpg')">>
          <div class="hover-overlay"></div>
          <div class="hover-4-content">
            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light">Merapi Lava </span>Tour</h3>
            <p class="hover-4-description text-uppercase mb-0 small">Menjelajahi Merapi dengan Lava Tour</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- DEMO 5 -->
   <div class="py-5">
    <h3 class="font-weight-bold mb-0">Hiburan</h3>
    <p class="font-italic text-muted mb-4">Lihat Lebih</p>
    <div class="row">
      <!-- DEMO 3 Item-->
      <div class="col-lg-6 mb-3 mb-lg-0">
        <div class="hover hover-3 text-white rounded"style="background-image: url('/img/wisatamalam.jpg')">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">Alun-Alun </span>Jogja</h3>
            <p class="hover-3-description small text-uppercase mb-0">Mengelilingi kota Jogja di alun-alun</p>
          </div>
        </div>
      </div>
      <!-- DEMO 3 Item    -->
      <div class="col-lg-6">
        <div class="hover hover-3 text-white rounded" style="background-image: url('/img/malioboro2.jpg')">>
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">Malioboro </span>Jogja</h3>
            <p class="hover-3-description small text-uppercase mb-0">Berlibur di Malioboro Jogja</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>



  </body>
</html>
