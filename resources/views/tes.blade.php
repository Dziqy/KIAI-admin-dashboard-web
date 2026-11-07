<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>tes </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    {{-- Botstrapp Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
          <a class="navbar-brand" href="/">MIS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/categories">Category</a>
              </li>
            </ul>
  
            <ul class="navbar-nav ms-auto">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="sumbit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> LogOut</button>
                    </form>
                </ul>
              </li>
              @else
              <li class="nav-item">
                  <a href="/login" class="nav-link "><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
              @endauth
            </ul>
            
          </div>
        </div>
    </nav>
    
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <select class="form-select" name="provinsi" id="provinsi" aria-label="Default select example">
                        <option>Pilih Provinsi</option>
                        @foreach ($provinces as $provinsi)
                            <option value="{{$provinsi->id}}">{{ $provinsi->name }}</option>
                        @endforeach
                    </select>
                    <select class="form-select" name="kabupaten" id="kabupaten" aria-label="Default select example">
                        <option>Pilih Kabupaten</option>
                    </select>
                    <select class="form-select" name="kecamatan" id="kecamatan" aria-label="Default select example">
                        <option>Pilih Kecamatan</option>
                    </select>
                    <select class="form-select" name="desa" id="desa" aria-label="Default select example">
                        <option>Pilih Desa</option>
                    </select>
                  <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Allready registered? <a href="/login">Login Now!</a></small>
            </main>
        </div>
    </div>

    

    
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });

          $(function() {

            $('#provinsi').on('change',function(){
                let id_provinsi = $('#provinsi').val();

                console.log(id_provinsi);
            })
          })
           

    });
    </script>
  </body>
</html>
