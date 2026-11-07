<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name= "csrf-token" content="{{ csrf_token() }}" />
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
  <title>KIAI - Register</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
  <!-- Custom Stylesheet -->
  <link href="assets/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 25px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #494bca;
}

body{ margin:0 auto; }
</style>



<body class="h-100 w-75" >

  <h1 class="error-text text-center text-primary py-5">KIAI</h1>
  
  <form id="regForm" action="/register" method="post">
    @csrf
    <h1>Pendaftaran Majelis/Kajian:</h1>
    {{-- <input type="hidden" name="id" class="form-control @error('id') is-invalid @enderror" id="id" placeholder=" " value="{{ old('id') }}"> --}}
    <!-- One "tab" for each step in the form: -->
    <div class="tab"><h3 class=" text-center">Profil Takmir</h3>
      <div class="row">
        <div class="col-lg-12">
          <div class="form-floating mb-3 mt-4">
            <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder=" " value="{{ old('name') }}">
            <label for="name">Name</label>
            @error('name')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder=" " value="{{ old('email') }}">
            <label for="email">Email</label>
            @error('email')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-floating mb-3">
            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder=" " value="{{ old('phone') }}" >
            <label for="phone">No Phone</label>
            @error('phone')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder=" ">
            <label for="password">Password</label>
            @error('password')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-floating mb-3">
            <input type="password" name="confirm" class="form-control @error('confirm') is-invalid @enderror" id="confirm" placeholder=" ">
            <label for="confirm">Confirm Password</label>
            @error('confirm')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
      </div>
    </div>
    <div class="tab"><h3 class=" text-center">Detail Majelis/Kajian</h3>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-floating mb-3 mt-4">
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder=" " value="{{ old('nama') }}">
            <label for="nama">Nama Masjid/Tempat Lokasi</label>
            @error('nama')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-floating mb-3 mt-4">
            <select class="form-select @error('password') is-invalid @enderror" name="jenis" id="jenis" aria-label="Floating label select example" value="{{ old('jenis') }}">
              <option value="masjid" selected>Masjid</option>
              <option value="rumah">Rumah</option>
              <option value="lainnya">Lainnya</option>
            </select>
            <label for="jenis">Jenis Lokasi</label>
            @error('jenis')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
        <div class="form-group col-lg-3">
          <select class="form-select @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi" aria-label="Floating label select example"> 
              <option>Pilih Provinsi</option>
              @foreach ($provinces as $provinsi)
                <option value="{{ $provinsi->id}}">{{ $provinsi->name}}</option>
              @endforeach
          </select>
          @error('provinsi')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
        </div>
        <div class="form-group col-lg-3">
          <select class="form-select @error('kabupaten') is-invalid @enderror" name="kabupaten" id="kabupaten" aria-label="Floating label select example">
              <option>Pilih kabupaten</option>
          </select>
          @error('kabupaten')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
        </div>
        <div class="form-group col-lg-3">
          <select class="form-select @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan" aria-label="Floating label select example">
              <option>Pilih kecamatan</option>
          </select>
          @error('kecamatan')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
        </div>
        <div class="form-group col-lg-3">
          <select class="form-select @error('desa') is-invalid @enderror" name="desa" id="desa" aria-label="Floating label select example">
              <option>Pilih desa</option>
          </select>
          @error('desa')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
        </div>
        {{-- <div class="col-lg-3">
          <div class="form-floating mb-3">
            <select class="form-select @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi" aria-label="Floating label select example">
              <option>Pilih Provinsi</option>
              @foreach ($provinces as $provinsi)
                <option value="{{ $provinsi->id}}">{{ $provinsi->name}}</option>
              @endforeach
            </select>
            <label for="provinsi">Provinsi</label>
            @error('provinsi')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-floating mb-3">
            <select class="form-select @error('kabupaten') is-invalid @enderror" name="kabupaten" id="kabupaten" aria-label="Floating label select example">
              <option>Pilih kabupaten</option>
            <label for="kabupaten">Kabupaten</label>
            @error('kabupaten')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-floating mb-3">
            <select class="form-select @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan" aria-label="Floating label select example">
              <option>Pilih kecamatan</option>
            </select>
            <label for="kecamatan">kecamatan</label>
            @error('kecamatan')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-floating mb-3">
            <select class="form-select @error('desa') is-invalid @enderror" name="desa" id="desa" aria-label="Floating label select example">
              <option>Pilih desa</option>
            <label for="desa">desa</label>
            @error('desa')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div> --}}
        <div class="col-lg-12">
          <div class="form-floating mb-3">
            <input type="text" onclick="muncul()" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder=" " value="{{ old('alamat') }}">
            <label for="alamat">Nama Jalan, Gedung, No. Rumah</label>
            @error('alamat')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-floating mb-3">
            <input type="hidden" name="latitude" class="form-control @error('latitude') is-invalid @enderror" id="latitude" placeholder=" " value="{{ old('latitude') }}">
            {{-- <label for="latitude">Latitude</label> --}}
            @error('latitude')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div> 
        <div class="col-lg-6">
          <div class="form-floating mb-3">
            <input type="hidden" name="longitude" class="form-control @error('longitude') is-invalid @enderror" id="longitude" placeholder=" " value="{{ old('longitude') }}">
            {{-- <label for="longitude">Longitude</label> --}}
            @error('longitude')
               <div class="invalid-feedback ">
                   {{ $message }}
               </div>
            @enderror
          </div>
        </div>

        <div class="col-lg-12">
          <div id="accordion-three" class="accordion">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6"><i class="fa" aria-hidden="true"></i> Tetapkan lokasi yang tepat</h5>
                </div>
                <div id="collapseThree6" class="collapse" data-parent="#accordion-three">
                  <div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>Mohon periksa apakah sudah benar, jika belum klik peta untuk menyesuaikan.
                  </div>
                  <!-- Elemen yang akan menjadi kontainer peta -->
                  <div id="googleMap" style="width:100%;height:380px;"></div>
                </div>
            </div>
          </div>
        </div>       

      </div>
    </div>
    <div class="tab">
      <h1 class="text-danger mt-5 mb-5">Perhatikan dan Isi Form dengan Benar, Sebelum Submit!!</h1>
    </div>
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" class="btn mb-1 btn-primary" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
    <p class="text-center mt-5 login-form__footer">Have account <a href="login" class="text-primary">Login </a> now!</p>
  </form>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
  $(function (){
    $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    $(function(){
      
      $('#provinsi').on('change', function(){
        let id_provinsi = $('#provinsi').val();
        console.log(id_provinsi);
        
        $.ajax({
          type : 'POST',
          url : "{{ route('getkabupaten') }}",
          data : {id_provinsi:id_provinsi},
          cache : false,

          success : function(msg){
            $('#kabupaten').html(msg);
          },
          error: function(data){
            console.log('error:',data)
          },
        })
      })

      $('#kabupaten').on('change', function(){
        let id_kabupaten = $('#kabupaten').val();
        
        $.ajax({
          type : 'POST',
          url : "{{ route('getkecamatan') }}",
          data : {id_kabupaten:id_kabupaten},
          cache : false,

          success : function(msg){
            $('#kecamatan').html(msg);
          },
          error: function(data){
            console.log('error:',data)
          },
        })
      })

      $('#kecamatan').on('change', function(){
        let id_kecamatan = $('#kecamatan').val();
        
        $.ajax({
          type : 'POST',
          url : "{{ route('getdesa') }}",
          data : {id_kecamatan:id_kecamatan},
          cache : false,

          success : function(msg){
            $('#desa').html(msg);
          },
          error: function(data){
            console.log('error:',data)
          },
        })
      })

    })

  });
</script>

 
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
      document.getElementById("nextBtn").type.display = "submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
</script>


    <!-- Menyisipkan library Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCgjR3VGFDb25MZUb5l_2N6zCsICPFDaZA&callback=initMap"></script>

<script>
  // variabel global marker
  var marker;
    
  function pindahMarker(position ){
    marker.setPosition(position);
    document.getElementById("latitude").value = position.lat();
    document.getElementById("longitude").value = position.lng();
   
  }

  function initialize() {
    
    navigator.geolocation.getCurrentPosition(function(position) {
      var propertiPeta = {
      center:new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
      zoom:15,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

    marker = new google.maps.Marker({
          position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
          map: peta
        });

    // even listner ketika peta diklik
    google.maps.event.addListener(peta, 'click', function(event) {
        pindahMarker(event.latLng, this);
      });
      document.getElementById("latitude").value = position.coords.latitude;
      document.getElementById("longitude").value = position.coords.longitude;
    });
    
  }
  
  // event jendela di-load  
  google.maps.event.addDomListener(window, 'load', initialize);
  
  function muncul(){
    document.getElementById("collapseThree6").className = "collapse show";
  }

</script>

<script src="assets/plugins/common/common.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/gleek.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>
</body>
</html>
