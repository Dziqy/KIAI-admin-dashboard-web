@extends('dashboard.layouts.main2')

@section('main')
<a href="/dashboard/kelola_asatidz/create" class="btn mb-3 btn-primary">Add Asatidz <span class="btn-icon-right"><i class="fa fa-plus-square-o"></i></span></a>

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Asatidz</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Asatidz</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; ?>
                            @foreach ($asatidz as $p)
                                <?php $i++; ?>
                                    <tr>
                                        <td><?php echo "$i"; ?></td>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->deskripsi }}</td>
                                        <td>
                                            <span>
                                                <a href="/dashboard/kelola_asatidz/{{ $p->id }}/edit" data-toggle="tooltip" data-placement="top" title="Show"><i class="fa fa-edit color-muted m-r-5 mb-2"></i> 
                                                </a>
                                                <form action="/dashboard/kelola_asatidz/{{ $p->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-warning btn-xs" type="submit" onclick="return confirm('are you sure?')"><i class="fa fa-close color-danger"></i>Hapus</button>
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