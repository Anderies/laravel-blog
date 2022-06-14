@extends('login.index')
@section('login-content')
    <div class="row" style="margin-top: 3%;margin-left: 15%;">
        <div class="col-lg-12">
        </div>
        <div class="col-lg-4">
            <div class="img-gradient">
                <img src="img/login-img.png" width="400" />
                <div class="div">

                </div>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <p class="card-title text-center flex-fill fw-bold fs-5" style="color: white;z-index:2;">Be a
                        blogger<br>Make a impact</p>
                </div>

            </div>
        </div>
        <div class="col-lg-4">
            <form action="/login" method="post" class="d-flex flex-column">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-weight: 500;">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email" value="{{ old('email') }}" autofocus required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" style="font-weight: 500;">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                {{-- <div class="d-flex justify-content-center"> --}}
                <button type="submit" class="btn btn-login w-75 mt-3 fw-bold align-self-center"
                    style="background-color: black;color: white;">Login</button>
            </form>
            {{-- ini harus diluar --}}
            <div class="d-flex justify-content-center">
                <a href="/registration" class="btn btn-create w-75 mt-3 fw-bold">Create Account</a>
            </div>

        </div>

    </div>
@endsection
