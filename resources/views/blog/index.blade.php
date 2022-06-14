<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Future Company | Home </title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container bg mb-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                {{-- NAVBAR COMPONENT --}}
                @include('blog/navdashboard')

                <div class="row justify-content-center mt-5">
                    <div class="col-md-10">
                        <form action="/posts" method="GET">
                            <div class="input-group mb-4">
                                {{-- VALUE di interpoolation agar tidak hilang pas tombol search dikirim --}}
                                <input type="text" class="form-control" placeholder="Search..." name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-danger" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                @foreach ($data_blog as $b)
                    <div class="row mt-4">

                        {{-- @dd($b) --}}
                        <div class="col-md-9">
                            {{-- Title --}}
                            <p class="title fw-bold">{{ $b['title'] }}</p>
                            {{-- Excerpt --}}
                            <p class="excerpt fw-normal">{{ $b['body'] }}</p>
                            <p class="date-text fw-light">19 September 2021</p>
                            {{-- <p class="fw-light">100Reads</p> --}}
                        </div>
                        <div class="col-md-3">
                            <img src="/img/robot-arm.png" alt="">
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</html>
