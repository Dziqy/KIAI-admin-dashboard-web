@extends('dashboard.layouts.main2')

@section('main')

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-4">
                    <img class="rounded-circle" src="../assets/images/user/form-user.png" alt="">
                    <div class="media-body">
                        <h3 class="mb-0">{{ $user->name }}</h3>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <a href="/dashboard/user/edit" class="btn btn-danger">Edit</a>
                    </div>
                </div>
    
                <ul class="card-profile__info">
                    <li class="mb-1"><strong class="text-dark mr-4">Phone</strong> <span>{{ $user->phone }}</span></li>
                    <li><strong class="text-dark mr-4">Email</strong> <span>{{ $user->email }}</span></li>
                </ul>
            </div>
        </div>  
    </div>
</div>
@endsection