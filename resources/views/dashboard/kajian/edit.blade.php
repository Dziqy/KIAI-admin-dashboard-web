@extends('dashboard.layouts.main4')

@section('main')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/kajian">Majelis/Kajian</a></li>
            <li class="breadcrumb-item active"><a href="/dashboard/kajian/edit">Form Edit Kajian</a></li>
        </ol>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="/dashboard/kajian/{{ $kajian->id }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="judul">Judul <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Kajian" value="{{ old('judul', $kajian->judul) }}">
                                @error('judul')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="asatidz_id">Asatidz <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control" id="asatidz_id" name="asatidz_id" value="{{ old('asatidz_id', $kajian->asatidz_id) }}">
                                    @if(old('asatidz_id', $kajian->asatidz_id))
                                    <option value="{{ $kajian->asatidz_id }}" selected>{{ $kajian->asatidz->name }}</option>
                                    @foreach ($asatidz as $a)
                                    <option value="{{ $a->id }}">{{ $a->name }}</option>
                                    @endforeach
                                    @else
                                    @foreach ($asatidz as $a)
                                    <option value="{{ $a->id }}">{{ $a->name }}</option>
                                    @endforeach
                                    @endif
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
                                <input type="text" name="tanggal" class="form-control" placeholder="2022-12-29" id="mdate" value="{{ old('tanggal', $kajian->tanggal) }}">
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
                                <input class="form-control" name="waktu" id="timepicker" placeholder="00:00" value="{{ old('waktu', $kajian->waktu) }}">
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
                                <select class="form-control" id="jenis" name="jenis" value="{{ old('jenis', $kajian->jenis) }}">
                                    @if(old('jenis', $kajian->jenis))
                                    <option value="{{ $kajian->jenis }}" selected>{{ $kajian->jenis }}</option>
                                    <option value="Umum">Umum</option>
                                    <option value="Ikhwan">Ikhwan</option>
                                    <option value="Akhwat">Akhwat</option>
                                    <option value="Online">Online</option>
                                    @else
                                    <option value="Umum">Umum</option>
                                    <option value="Ikhwan">Ikhwan</option>
                                    <option value="Akhwat">Akhwat</option>
                                    <option value="Online">Online</option>
                                    @endif
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

                                <input type="hidden" name="oldImage" value="{{ $kajian->poster }}">
                                @if ($kajian->poster)
                                    <img src="{{ asset('storage/' . $kajian->poster) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                @endif
                                <input class="form-control-file @error('poster') is-invalid @enderror" type="file" id="poster" name="poster" onchange="previewImage()">

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
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Deskripsi Kajian">{{ old('deskripsi', $kajian->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" name="streaming" for="streaming">Link Streaming</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="streaming" name="streaming" placeholder="Link Streaming" value="{{ old('streaming', $kajian->streaming) }}">
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
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection