@extends('dashboard.layouts.main')

@section('main')
<div class="container-fluid mt-2">
    <h1>Assalamualaikum, {{ $user->name }}</h1>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <span class="display-5"><img src="assets/images/logo.png" alt=""></span>
                    <h2 class="mt-3">Kelola Majelis / Kajian </h2>
                    <h6>Kelola KIAI Dihadirkan untuk memudahkan kaum muslimin mengelola dan menyebarkan Syiar dan Ilmu islam di manapun berada.</h6>
                </div>
            </div>
        </div>
    </div>

    @can('admin')
    <div class="row">
        <div class="col-lg-3">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Lokasi Majelis / Kajian</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $total_majelis }}</h2>
                    </div>
                    <span class="float-right display-5"><i class="fa fa-map-marker"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Pendaftar Takmir / Majelis</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $pendaftar }}</h2>
                    </div>
                    <span class="float-right display-5"><i class="fa fa-sign-in"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card gradient-3">
                <div class="card-body">
                    <h3 class="card-title text-white">Asatidz</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $total_asatidz }}</h2>
                    </div>
                    <span class="float-right display-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card gradient-4">
                <div class="card-body">
                    <h3 class="card-title text-white">Jamaah</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $total_jamaah }}</h2>
                    </div>
                    <span class="float-right display-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                        <h4 class="card-title mb-0">Lokasi</h4>
                    <!-- Elemen yang akan menjadi kontainer peta -->
                    <div id="googleMap" style="width:100%;height:380px;"></div>
                </div>        
            </div>
        </div>
    </div>
    @endcan

    @can('takmir')
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Jumlah Kajian</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $jumlah_kajian }}</h2>
                    </div>
                    <span class="float-right display-5"><i class="fa fa-home"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Kajian Libur</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ $kajian_libur }}</h2>
                    </div>
                    <span class="float-right display-5"><i class="fa fa-eye-slash"></i></span>
                </div>
            </div>
        </div>
    </div>
    @endcan
    


</div>

@endsection