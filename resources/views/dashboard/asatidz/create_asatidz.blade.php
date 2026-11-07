@extends('dashboard.layouts.main4')

@section('main')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/kelola_asatidz">List Asatidz</a></li>
            <li class="breadcrumb-item active"><a href="/dashboard/edit_asatidz">Form Create Asatidz</a></li>
        </ol>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="/dashboard/kelola_asatidz" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="name">name <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Asatidz">
                                @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="deskripsi">deskripsi <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <textarea class="form-control h-150px" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi"></textarea>
                                @error('deskripsi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection