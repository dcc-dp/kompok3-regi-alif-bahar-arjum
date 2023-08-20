
<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="{{ asset('fobiaadmin-10/ltr/assets/css/pace.min.css') }}" rel="stylesheet" />
  <script src="{{asset('fobiaadmin-10/ltr/assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('fobiaadmin-10/ltr/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{asset('fobiaadmin-10/ltr/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('fobiaadmin-10/ltr/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('fobiaadmin-10/ltr/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('fobiaadmin-10/ltr/assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

 
  <title>Fobia - Bootstrap5 Admin Template</title>
</head>

<body class="" style="background-color: #9747FF">

  <!--start wrapper-->
  <div class="wrapper" >
    <div class="card my-5 mx-5 p-5" style="border: none; background-color: #9747FF" >
      <div class="row g-0 m-0">
        <div class="col-xl-6 col-lg-6" style="background-color: #8812B1">
          <div class="login-cover-wrapper p-5" style="height: 100%">
            <div class="card shadow-none">
              <div class="card-body">
            
                <form class="form-body row g-3">
                  <div class="col-12">
                    <label for="inputEmail" class="form-label">Username/Email</label>
                    <input type="email" class="form-control" id="inputEmail">
                  </div>
                  <div class="col-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword">
                  </div>
                  <div class="col-12 col-lg-12 text-center">
                    <p class="mb-0">Belum punya akun? <a href="authentication-sign-up-cover.html">Daftar</a></p>
                  </div>

                  {{-- col ke2 --}}
                  <div class="col-12 col-lg-12">
                    <div class="d-grid">
                      <button type="button" class="btn btn-primary">Sign In</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      
        <div class="col-xl-6 col-lg-6 " style="background-color: #420359">
         
        </div>
      </div>
    </div>
  </div>
  <!--end wrapper-->


  
</body>

</html>