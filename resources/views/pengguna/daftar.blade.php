<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <Link rel="stylesheet" type="text/css" href="{{ asset('/css/daftar.css') }}">

    <title>Travelove</title>
  </head>
  <body>
      <img class="center" src="{{ asset('/img/flower.png') }}">"
       <img class="hehe" src="{{ asset('/img/flower.png') }}">"
     <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Daftar TraveLove</h5>

            <form class="form-signin" method="post" action="DaftarAkun/proses">
              {{ csrf_field() }}
              <h10 style="font-size:14px;"  class="card-title text-center">Nama Lengkap</h10>
              <div class="form-label-group">
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required autofocus>

              </div>

                <h10 style="font-size:14px;"  class="card-title text-center">No. KTP</h10>
               <div class="form-label-group">
                <input type="text" name="ktp" class="form-control" placeholder="No. KTP" required autofocus>

              </div>

                <h10 style="font-size:14px;"  class="card-title text-center">Tanggal Lahir</h10>
                <div class="form-label-group">
                <input type="date" name="date" class="form-control" placeholder="Tanggal Lahir" required autofocus>

              </div>

                <h10 style="font-size:14px;"  class="card-title text-center">Alamat Lengkap</h10>
               <div class="form-label-group">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required autofocus>

              </div>

              <h10 style="font-size:14px;"  class="card-title text-center">Email</h10>
              <div class="form-label-group">
                <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>

              </div>

              <h10 style="font-size:14px;"  class="card-title text-center">Password</h10>
              <div class="form-label-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>

              </div>

              <br>
              <br>


              <button style="background-color:#8B0000; border:none;" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Buat Akun</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
