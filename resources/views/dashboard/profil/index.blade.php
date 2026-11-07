@extends('dashboard.layouts.main2')

@section('main')

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Profil Majelis / Kajian : </h4>
                <div class="basic-form">
                    <form action="/dashboard/profil" method="post">
                        @method('post')
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="nama" value="{{ old('nama', $profil->nama) }}">
                                @error('nama')
                                   <div class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="jenis">Jenis Lokasi <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-10">
                                <select class="form-control" id="jenis" name="jenis" value="{{ old('jenis', $profil->jenis) }}">
                                    @if(old('jenis', $profil->jenis))
                                    <option value="{{ $profil->jenis }}" selected>{{ $profil->jenis }}</option>
                                    <option value="Masjid">Masjid</option>
                                    <option value="Rumah">Rumah</option>
                                    <option value="Lainnya">Lainnya</option>
                                    @else
                                    <option value="Masjid">Masjid</option>
                                    <option value="Rumah">Rumah</option>
                                    <option value="Lainnya">Lainnya</option>
                                    @endif
                                </select>
                                @error('jenis')
                                   <div class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="alamat" value="{{ old('alamat', $profil->alamat) }}">
                                @error('alamat')
                                   <div class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm">
                                <select class="form-control" id="provinsi" name="provinsi" value="{{ old('provinsi', $profil->provinsi) }}">
                                    @foreach ($provinces as $provinsi)
                                        @if(old('provinsi', $profil->provinsi) == $provinsi->id)
                                        <option value="{{ $provinsi->id }}" selected>{{ $provinsi->name }}</option>
                                        @else
                                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('provinsi')
                                   <div class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                @enderror
                            </div>
                            <div class="col-sm">
                                <select class="form-control" id="kabupaten" name="kabupaten" value="{{ old('kabupaten', $profil->kabupaten) }}">
                                    @foreach ($regencies as $kabupaten)
                                        @if(old('kabupaten', $profil->kabupaten) == $kabupaten->id)
                                        <option value="{{ $kabupaten->id }}" selected>{{ $kabupaten->name }}</option>
                                        @else
                                        @endif
                                    @endforeach
                                </select>
                                @error('kabupaten')
                                   <div class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                @enderror
                            </div>
                            <div class="col-sm">
                                <select class="form-control" id="kecamatan" name="kecamatan" value="{{ old('kecamatan', $profil->kecamatan) }}">
                                    @foreach ($districts as $kecamatan)
                                        @if(old('kecamatan', $profil->kecamatan) == $kecamatan->id)
                                        <option value="{{ $kecamatan->id }}" selected>{{ $kecamatan->name }}</option>
                                        @else
                                        
                                        @endif
                                    @endforeach
                                </select>
                                @error('kecamatan')
                                   <div class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                @enderror
                            </div>
                            <div class="col-sm">
                                <select class="form-control" id="desa" name="desa" value="{{ old('desa', $profil->desa) }}">
                                    @foreach ($villages as $desa)
                                        @if(old('desa', $profil->desa) == $desa->id)
                                        <option value="{{ $desa->id }}" selected>{{ $desa->name }}</option>
                                        @else
                                        
                                        @endif
                                    @endforeach
                                </select>
                                @error('desa')
                                   <div class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="hidden" name="latitude" id="latitude" class="form-control @error('latitude') is-invalid @enderror" placeholder="latitude" value="{{ old('latitude', $profil->latitude) }}">
                                @error('latitude')
                                   <div class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                           
                            <div class="col-sm-10">
                                <input type="hidden" name="longitude" id="longitude" class="form-control @error('longitude') is-invalid @enderror" placeholder="longitude" value="{{ old('longitude', $profil->longitude) }}">
                                @error('longitude')
                                   <div class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Lokasi Peta<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div id="googleMap" style="width:100%;height:380px;"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
      center:new google.maps.LatLng({{ $profil->latitude }}, {{ $profil->longitude }}),
      zoom:16,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

    marker = new google.maps.Marker({
          position: new google.maps.LatLng({{ $profil->latitude }}, {{ $profil->longitude }}),
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

</script>
@endsection