@extends('dashboard.layouts.main2')

@section('main')

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<a href="/dashboard/kajian/create" class="btn mb-3 btn-primary">Add Kajian <span class="btn-icon-right"><i class="fa fa-plus-square-o"></i></span></a>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Majelis / Kajian Dari : {{ $location->nama }}</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Materi</th>
                                <th>Asatidz</th>
                                <th>Jenis</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kajian as $k)
                            <tr>
                                @if ($k->tanggal == date("Y-m-d"))
                                <td><span class="label gradient-1 rounded">Hari Ini</span></td>
                                @elseif($k->tanggal == date("Y-m-d", strtotime("+1 day")))
                                <td><span class="label gradient-3 rounded">Besok</span></td>
                                @elseif($k->tanggal < date("Y-m-d", strtotime("+1 day")))
                                <td><span class="label gradient-2 rounded">{{ $k->tanggal }}</span></td>
                                @else
                                <td>{{ $k->tanggal }}</td>
                                @endif
                                <td>{{ $k->waktu }}</td>
                                <td>{{ $k->judul }}</td>
                                <td>{{ $k->asatidz->name }}</td>
                                <td>{{ $k->jenis }}</td>
                                @if ($k->status == 1)
                                    <td><span class="badge badge-primary px-2">Ada</span></td>
                                @else
                                <td><span class="badge badge-danger px-2">Libur</span></td>
                                @endif
                                <td>
                                    <span>
                                        <a href="/dashboard/kajian/{{ $k->id }}/edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> 
                                        </a>
                                        {{-- <a href="/dashboard/kajian/{{ $k->id }}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a> --}}
                                        <form action="/dashboard/kajian/{{ $k->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0 mb-1" onclick="return confirm('are you sure?')"><i class="fa fa-close color-danger"></i></button>
                                        </form>
                                    </span>
                                    <span>
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-dark dropdown-toggle btn-xs mb-2" type="button" data-toggle="dropdown">Status</button>
                                            <div class="dropdown-menu">
                                                <form action="/ada/{{ $k->id }}" method="post" class="d-inline">
                                                    @csrf
                                                    <button class="dropdown-item btn-sm" type="submit" onclick="return confirm('are you sure?')">Ada</i></button>
                                                </form>
                                                <form action="/libur/{{ $k->id }}" method="post" class="d-inline">
                                                    @csrf
                                                    <button class="dropdown-item btn-sm" type="submit" onclick="return confirm('are you sure?')">Libur</i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection