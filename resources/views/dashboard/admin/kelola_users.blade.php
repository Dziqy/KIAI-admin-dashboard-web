@extends('dashboard.layouts.main2')

@section('main')

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<a href="/dashboard/kajian/create" class="btn mb-3 btn-primary">Add Administrator <span class="btn-icon-right"><i class="fa fa-plus-square-o"></i></span></a>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Users</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; ?>
                            @foreach ($users as $u)
                            <?php $i++; ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->phone }}</td>
                                <td>{{ $u->email }}</td>
                                @if ($u->role == 1)
                                <td><span class="badge badge-primary px-2">Admin</span></td>
                                @else
                                <td>Takmir</td>
                                @endif
                                @if ($u->status == 1)
                                    <td><span class="badge badge-success px-2">Aktif</span></td>
                                @else
                                <td><span class="badge badge-danger px-2">nonAktif</span></td>
                                @endif
                                
                                    <td>
                                        <span>
                                            {{-- <a href="/dashboard/admin/{{ $u->id }}/edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> 
                                            </a> --}}
                                            
                                            <form action="/dashboard/admin/{{ $u->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0 mb-2" onclick="return confirm('are you sure?')"><i class="fa fa-close color-danger"></i></button>
                                            </form>
                                        </span>
                                        <span>
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-dark dropdown-toggle btn-sm mb-2" type="button" data-toggle="dropdown">Status</button>
                                                <div class="dropdown-menu">
                                                    <form action="/aktif_status_user/{{ $u->id }}" method="post" class="d-inline">
                                                        @csrf
                                                        <button class="dropdown-item btn-sm" type="submit" onclick="return confirm('are you sure?')">Aktif</i></button>
                                                    </form>
                                                    <form action="/nonAktif_status_user/{{ $u->id }}" method="post" class="d-inline">
                                                        @csrf
                                                        <button class="dropdown-item btn-sm" type="submit" onclick="return confirm('are you sure?')">Non Aktif</i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </span>
                                        <span>
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown">Role</button>
                                                <div class="dropdown-menu">
                                                    <form action="/role_admin/{{ $u->id }}" method="post" class="d-inline">
                                                        @csrf
                                                        <button class="dropdown-item btn-sm" type="submit" onclick="return confirm('are you sure?')">Admin</i></button>
                                                    </form>
                                                    <form action="/role_takmir/{{ $u->id }}" method="post" class="d-inline">
                                                        @csrf
                                                        <button class="dropdown-item btn-sm" type="submit" onclick="return confirm('are you sure?')">Takmir</i></button>
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