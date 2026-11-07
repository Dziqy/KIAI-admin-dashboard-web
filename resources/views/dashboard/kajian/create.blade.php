@extends('dashboard.layouts.main3')

@section('main')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/kajian">Majelis/Kajian</a></li>
            <li class="breadcrumb-item active"><a href="/dashboard/kajian/create">Form buat Kajian</a></li>
        </ol>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="/dashboard/kajian" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="judul">Judul 
                                <span class="text-danger">*
                                </span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Kajian">
                                <div class="text-danger">
                                    @error('judul')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="asatidz">Asatidz <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" name="asatidz" class="form-control" id="asatidz" name="asatidz" placeholder="Nama Asatidz">
                                @error('asatidz')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="asatidz_id">Asatidz <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control" id="asatidz_id" name="asatidz_id">
                                    @foreach ($asatidz as $a)
                                    <option value="{{ $a->id }}">{{ $a->name }}</option>
                                    @endforeach
                                </select>
                                @error('asatidz_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="tanggal">Tanggal <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" name="tanggal" class="form-control" placeholder="2022-12-29" id="mdate">
                                @error('tanggal')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="waktu">Waktu<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input class="form-control" name="waktu" id="timepicker" placeholder="00:00">
                                @error('waktu')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="jenis">Jenis Kajian <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control" id="jenis" name="jenis">
                                    <option value="Umum">Umum</option>
                                    <option value="Ikhwan">Ikhwan</option>
                                    <option value="Akhwat">Akhwat</option>
                                    <option value="Online">Online</option>
                                </select>
                                @error('jenis')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="poster">poster <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="file" class="form-control-file" id="poster" name="poster" onchange="previewImage()">
                                @error('poster')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="deskripsi">Deskripsi
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
                            <label class="col-lg-4 col-form-label" for="streaming">Link Streaming</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="streaming" name="streaming" placeholder="Link Streaming">
                                @error('streaming')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label class="col-lg-4 col-form-label"><a href="#">Terms &amp; Conditions</a>  <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-8">
                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                    <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1"> <span class="css-control-indicator"></span> I agree to the terms</label>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#asatidz_id').select2();
    });
</script>
    @endsection