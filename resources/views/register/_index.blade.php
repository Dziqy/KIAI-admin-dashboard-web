@extends('layouts.account.main')

@section('main')

    <div class="login-form-bg">
        
        <div class="container">

            <h1 class="error-text text-center text-primary py-5">KIAI</h1>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                        <div>
                            <h4>Detail Akun</h4>
                            <section>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap Takmir"  value="{{ old('name') }}">
                                            @error('name')
                                               <div class="invalid-feedback ">
                                                   {{ $message }}
                                               </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"  value="{{ old('email') }}">
                                            @error('email')
                                               <div class="invalid-feedback ">
                                                   {{ $message }}
                                               </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="password" name="Password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"  value="{{ old('password') }}">
                                            @error('password')
                                               <div class="invalid-feedback ">
                                                   {{ $message }}
                                               </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="password" name="confirm" class="form-control @error('confirm') is-invalid @enderror" placeholder="Confirm Password"  value="{{ old('confirm') }}">
                                            @error('confirm')
                                               <div class="invalid-feedback ">
                                                   {{ $message }}
                                               </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h4>Detail Majelis</h4>
                            <section>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="firstName" class="form-control" placeholder="Nama Lokasi Kajian" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select id="inputState" class="form-control">
                                                <option selected="selected">Choose...</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control" placeholder="Address" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="city" class="form-control" placeholder="City" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="zip" class="form-control" placeholder="ZIP Code" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="city" class="form-control" placeholder="City" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="zip" class="form-control" placeholder="ZIP Code" >
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h4>Billing Details</h4>
                            <section>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="creditCard" placeholder="Credit Card Number">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="date" placeholder="Expiration Date">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="owner" placeholder="Credit Card Owner">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h4>Confirmation</h4>
                            <section>
                                <div class="row h-100">
                                    <div class="col-12 h-100 d-flex flex-column justify-content-center align-items-center">
                                        <h2>You have submitted form successfully!</h2>
                                        <p>Thank you very much for you information. we will procceed accordingly.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <h6 class="text-center mt-5 login-form__footer">Have account <a href="/login" class="text-primary">Login </a> now!</h6>
                </div>
            </div>



            
            <div class="row justify-content-center py-5">
                <div class="col-lg">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                           
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img class="card-img" height="495" src="assets/images/big/img1.jpg" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <a class="text-center" href="index.html"> <h4>KIAI</h4></a>
                                        <form class="mt-5 mb-5 login-input" action="/register" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                                                @error('name')
                                                <div class="invalid-feedback ">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                                                @error('password')
                                                <div class="invalid-feedback ">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn login-form__btn submit w-100">Register</button>
                                        </form>
                                        <p class="text-center mt-5 login-form__footer">Have account <a href="login" class="text-primary">Login </a> now!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Default Card</h5>
                      Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas.
                      Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut.
                      Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
                    </div>
                </div><!-- End Default Card -->
            </div>
            
        </div>
    </div>
    
@endsection