@extends('dashboard.layouts.main2')

@section('main')

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<a href="/dashboard/kajian/create" class="btn mb-3 btn-primary">Add Pengumuman/Tabligh Akbar <span class="btn-icon-right"><i class="fa fa-plus-square-o"></i></span></a>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Majelis</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Kabupaten</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; ?>
                            @foreach ($locations as $l)
                                @if ($l->user->status == 1)
                                <?php $i++; ?>
                                    <tr>
                                        <td><?php echo "$i"; ?></td>
                                        <td>{{ $l->nama }}</td>
                                        <td>{{ $l->user->email }}</td>
                                        <td>{{ $l->user['phone'] }}</td>
                                        <td>{{ $l->regency->name }}</td>
                                        <td>{{ $l->alamat }}</td>
                                        {{-- @if ($l->user->status == 1)
                                            <td><span class="badge badge-success px-2">Aktif</span></td>
                                        @else
                                        <td><span class="badge badge-danger px-2">NonAktif</span></td>
                                        @endif --}}
                                        {{-- <td>
                                            <span>
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-dark dropdown-toggle" type="button" data-toggle="dropdown">Status</button>
                                                    <div class="dropdown-menu">
                                                        <form action="/aktif_status_majelis/{{ $l->id }}" method="post" class="d-inline">
                                                            @csrf
                                                            <button class="dropdown-item" type="submit" onclick="return confirm('are you sure?')">Aktif</i></button>
                                                        </form>
                                                        <form action="/nonAktif_status_majelis/{{ $l->id }}" method="post" class="d-inline">
                                                            @csrf
                                                            <button class="dropdown-item" type="submit" onclick="return confirm('are you sure?')">Non Aktif</i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </span>
                                        </td> --}}
                                        <td>
                                            <span>
                                                <a href="/dashboard/kelola_majelis/{{ $l->id }}" data-toggle="tooltip" data-placement="top" title="Show"><i class="	fa fa-eye color-muted m-r-5 mb-2"></i> 
                                                </a>
                                                
                                                <form action="/dashboard/kelola_majelis/{{ $l->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge bg-danger border-0 mb-2" title="Hilangkan" onclick="return confirm('are you sure?')"><i class="fa fa-close color-danger"></i></button>
                                                </form>
                                                <form action="/nonAktif_status_majelis/{{ $l->id }}" method="post" class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-warning btn-xs" type="submit" onclick="return confirm('are you sure?')"><i class="fa fa-trash"></i>Dinonaktifkan</button>
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection