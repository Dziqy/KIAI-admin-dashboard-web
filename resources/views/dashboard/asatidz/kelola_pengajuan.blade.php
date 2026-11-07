@extends('dashboard.layouts.main2')

@section('main')

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Pengajuan Asatidz</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Asatidz</th>
                                <th>Deskripsi</th>
                                <th>Di Ajukan Oleh</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; ?>
                            @foreach ($pengajuan as $p)
                                <?php $i++; ?>
                                    <tr>
                                        <td><?php echo "$i"; ?></td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->deskripsi }}</td>
                                        <td>
                                            <ul>
                                                <li>Takmir: <b>{{ $p->user->name }}</b></li>
                                                <li>Majelis: <b>{{ $p->user->location->nama }}</b></li>
                                                <li>Phone: <b>{{ $p->user->phone }}</b></li>
                                                <li>Email: <b>{{ $p->user->email }}</b></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <span>
                                                <form action="/terima/{{ $p->id }}" method="post" class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-success btn-xs" type="submit" onclick="return confirm('are you sure?')"><i class="fa fa-check"></i>Terima</button>
                                                </form>
                                                <form action="/tolak/{{ $p->id }}" method="post" class="d-inline">
                                                    {{-- @method('delete') --}}
                                                    @csrf
                                                    <button class="btn btn-warning btn-xs" type="submit" onclick="return confirm('are you sure?')"><i class="fa fa-close color-danger"></i>Tolak</button>
                                                </form>
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