@extends('dashboard.layouts.main3')

@section('main')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/asatidz/ajukan">Ajukan</a></li>
            <li class="breadcrumb-item active"><a href="/dashboard/asatidz/form_pengajuan">Form Pengajuan Asatidz</a></li>
        </ol>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="/dashboard/asatidz/form_pengajuan" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="nama">Nama Lengkap<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" name="nama" class="form-control" id="nama" name="nama" placeholder="Nama Asatidz">
                                @error('nama')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="jenis">Gender <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control" id="jenis" name="jenis">
                                    <option value="Ikhwan">Ikhwan</option>
                                    <option value="Akhwat">Akhwat</option>
                                </select>
                                {{-- @error('jenis')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="deskripsi">Deskripsi <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Deskripsi Kajian"></textarea>
                                @error('deskripsi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-primary">Ajukan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection