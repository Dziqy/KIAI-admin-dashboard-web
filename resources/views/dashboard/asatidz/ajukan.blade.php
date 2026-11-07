@extends('dashboard.layouts.main3')

@section('main')

@if(session()->has('success'))
<div class="alert alert-warning">
    {{ session('success') }}
</div>
@endif

<div class="container mt-2">
    <div class="container col-lg-9">
        <div class="card">
            <div class="card-body">
                <div class="text">
                    <span class="display-5"><img src="../../assets/images/logo.png" alt=""></span>
                    <h2 class="mt-1">Proses Pengajuan Asatidz (Ustadz/Ustadzah) </h2>
                    <br>
                    <h6>Sebagian besar permohonan ditinjau dalam waktu 3 hari kerja. Jika permohonan Anda memerlukan peninjauan lebih mendetail, kami mungkin akan meminta informasi tambahan. Sambil menunggu, Anda dapat login ke akun Google untuk Nonprofit kapan saja guna memeriksa status permohonan.</h6>
                    <h6>Perlu diketahui bahwa permintaan aktivasi yang dikirim tetapi memiliki error akan dikembalikan ke organisasi dan perlu dikoreksi sebelum permintaan dapat dikirimkan lagi. Pengiriman ulang akan menyebabkan keterlambatan pada proses peninjauan untuk semua orang.</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-lg-9">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center mb-4">
                    <div class="media-body">
                        <h3 class="mb-0 text-center">Bantuan Pengajuan</h3>
                    </div>
                </div>
                
                <div class="row mb-5">
                    <div class="col">
                        <a href="/dashboard/asatidz/form_pengajuan">
                        <div class="card card-profile text-center">
                            <span class="mb-1 text-primary"><i class="fa fa-clipboard"></i></span>
                            <h3 class="mb-0">Ajukan Permohonan Asatidz</h3>
                            <p class="text-muted px-4">Permohonan ditinjau dalam waktu 3 hari kerja</p>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://api.whatsapp.com/send?phone=6285733050326&text=">
                        <div class="card card-profile text-center">
                            <span class="mb-1 text-warning"><i class="fa fa-phone"></i><i class="fa fa-comments-o"></i></span>
                            <h3 class="mb-0">Hubungi kami</h3>
                            <p class="text-muted">Beri tahu kami selengkapnya dan kami akan membantu Anda</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>  
    </div>

</div>


@endsection