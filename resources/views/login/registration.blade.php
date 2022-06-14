@extends('login.index')
@section('login-content')
    <div class="row" style="margin-top: 2%;">
        <div class="d-flex justify-content-center">
            <p class="fw-bold fs-4">Blogger registration
            </p>
        </div>
    </div>
    <div class="row" style="margin-top: 3%">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4">
            <div class="img-gradient">
                <img src="img/regis-img.png" width="400" max-height="600px" />
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <p class="card-title text-center flex-fill fw-bold fs-5" style="color: white;z-index:2;">Yeay <span
                            style="margin-left: 0.2%">!</span>
                        <br><span style="font-size: 17px;">Fill in and become a blogger</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <form action="/register" method="post" style="display: flex;
        flex-direction: column;">
                {{-- Untuk Keamanan --}}
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-weight:500;">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" style="font-weight:500;">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label" style="font-weight:500;">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="authorName" class="form-label fw-normal" style="font-weight:500;">Author Name</label>
                    <input type="text" class="form-control" id="authorName" name="authorName" required>
                </div>
                <button type="submit" class="btn btn-login w-75 mt-3 m-auto"
                    style="background-color: black;color: white;">Submit</button>

            </form>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
@endsection
