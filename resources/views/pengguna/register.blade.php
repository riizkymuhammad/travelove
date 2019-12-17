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

            <form class="form-signin" method="post" action="{{ route('register') }}">
              @csrf
              <h10 style="font-size:14px;"  class="card-title text-center">Nama Lengkap</h10>
              <div class="form-label-group">
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required autofocus>
               
              </div>

                <h10 style="font-size:14px;"  class="card-title text-center">No. KTP</h10>
               <div class="form-label-group">
                <input type="text" name="ktp" class="form-control" placeholder="No. KTP" required autofocus>
                
              </div>

              <h10 style="font-size:14px;"  class="card-title text-center">Username</h10>
               <div class="form-label-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                
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
                <input type="text" name="email" class="form-control" placeholder="Email address" required autofocus>
                
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
            
  </body>
</html>