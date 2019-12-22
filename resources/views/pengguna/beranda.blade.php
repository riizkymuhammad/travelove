<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <Link rel="stylesheet" type="text/css" href="{{ asset('/css/beranda.css') }}">

 <nav class="navbar navbar-expand-lg navbar-light apasih">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pemesanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Porfil</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Cari</button>
    </form>
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
      <div class="carousel-item active" style="background-image: url('{{ asset('/img/parangtritis2.jpg') }}')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Parangtritis</h3>
          <p class="lead">Menikmati indahnya matahari terbenam di Pantai Parangtritis</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('{{ asset('/img/prambanan.jpg') }}')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Prambanan</h3>
          <p class="lead">Sejarah yang tak terlupakan di Prambanan Yogyakarta</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('{{ asset('/img/kulinerjgj.jpg') }}')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Berbagai Makanan Khas</h3>
          <p class="lead">Temukan makanan dan oleh-oleh khas sekaligus melakukan liburan berasama</p>
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
        <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-12 mx-auto">
        <div class="text-white p-5 shadow-sm rounded banner">
          <h1 style="color: #000000;" class="display-4">Selamat Datang di Travelove!</h1>
          <p style="color: #000000;" class="lead">Pilih Kategorimu dibawah ini. Jelajahi tempat favoritmu dan temukan berbagai destinasi wisata pilihan Anda</p>
        </div>
      </div>
    </div>

  <!-- DEMO 1 -->
  <div class="py-5">
    <h3 class="font-weight-bold mb-0">Kuliner</h3>
    <p class="font-italic text-muted mb-4">Lihat Lebih</p>
    <div class="row">
      <!-- DEMO 1 Item-->
      <div class="col-lg-6 mb-3 mb-lg-0">
        <div class="hover hover-1 text-white rounded"style="background-image: url('{{ asset('/img/gudeg.jpg') }}')">
          <div class="hover-overlay"></div>
          <div class="hover-1-content px-5 py-4">
            <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Gudeg </span>Jogja</h3>
            <p class="hover-1-description font-weight-light mb-0">Makanan tradisional yang tidak terbantahkan kelezatannya.</p>
          </div>
        </div>
      </div>
      <!-- DEMO 1 Item-->
      <div class="col-lg-6">
        <div class="hover hover-1 text-white rounded"style="background-image: url('{{ asset('/img/kulinerjgj.jpg') }}')">
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
        <div class="hover hover-2 text-white rounded"style="background-image: url('{{ asset('/img/bukitbintang.jpg') }}')">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-5 py-4">
            <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Bukit </span>Bintang</h3>
            <p class="hover-2-description text-uppercase mb-0">Menikmati indahnya Yogyakarta di Bukit Bintang</p>
          </div>
        </div>
      </div>

      <!-- DEMO 2 Item-->
      <div class="col-lg-6">
        <div class="hover hover-2 text-white rounded"style="background-image: url('{{ asset('/img/pintulawu.jpg') }}')">
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
        <div class="hover hover-3 text-white rounded"style="background-image: url('{{ asset('/img/prambanan.jpg') }}')">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">Candi </span>Prambanan</h3>
            <p class="hover-3-description small text-uppercase mb-0">Bersama menikmati indahnya karya seni Candi Prambanan </p>
          </div>
        </div>
      </div>
      <!-- DEMO 3 Item    -->
      <div class="col-lg-6">
        <div class="hover hover-3 text-white rounded" style="background-image: url('{{ asset('/img/affandi.jpg') }}')">>
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
        <div class="hover hover-4 text-white rounded"style="background-image: url('{{ asset('/img/Parangtritis.jpg') }}')">
          <div class="hover-overlay"></div>
          <div class="hover-4-content">
            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light">Pantai </span>Parangtritis</h3>
            <p class="hover-4-description text-uppercase mb-0 small">Menikmati indahnya pantai Parangtritis berdua</p>
          </div>
        </div>
      </div>
      <!-- DEMO 4 Item            -->
      <div class="col-lg-6">
        <div class="hover hover-4 text-white rounded"style="background-image: url('{{ asset('/img/lavatour.jpg') }}')">>
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
        <div class="hover hover-3 text-white rounded"style="background-image: url('{{ asset('/img/wisatamalam.jpg') }}')">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">Alun-Alun </span>Jogja</h3>
            <p class="hover-3-description small text-uppercase mb-0">Mengelilingi kota Jogja di alun-alun</p>
          </div>
        </div>
      </div>
      <!-- DEMO 3 Item    -->
      <div class="col-lg-6">
        <div class="hover hover-3 text-white rounded" style="background-image: url('{{ asset('/img/malioboro2.jpg') }}')">>
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
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Footer -->
  <footer class="yow">
    <center><div class="container py-5">
        <div class="col-lg-4 col-md-6 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">TRIZ Group</h6>
          <p class="text-muted mb-4">Grup yang berfokus pada pengembangan sistem aplikasi modern yang membantu menumbuhkan ekonomi nasional. Travelove, adalah sistem aplikasi pencarian dan pemesanan tempat wisata untuk berlibur bersama.</p></center>
    </div>
        <div class="yow">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2019 Bootstrapious All rights reserved.</p>
      </div>
    </div>
  </footer>

  </body>
</html>