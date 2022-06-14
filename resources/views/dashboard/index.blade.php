<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Future Company | Home </title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">
                @include('blog/navdashboard')
                <div class="d-flex justify-content-between mt-4">
                    <div class="d-flex flex-column">
                        <p class="fw-bold">Written by: <span
                                class="fw-normal">{{ auth()->user()->name }}</span></p>
                        <p class="fw-bold">Status :
                            <span class="fw-normal" style="color: #00E676;">Published</span> |
                            <span class="fw-normal" style="color: #FFEE58;">Draft</span>
                        </p>
                    </div>

                    <div class="align-self-end">
                        <button type="submit" class="btn btn-dark" form="blog-form">Published</button>
                    </div>

                </div>

                </p>
                <form action="/dashboard" method="post" id="blog-form">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                            value="{{ old('title') }}">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="hashtag" name="hashtag" placeholder="#hashtag"
                            value="{{ old('hashtag') }}">
                    </div>
                    <div class="form-group mb-3">
                        <input id="body" type="hidden" name="body" value={{ old('body') }}>
                        <trix-editor input="body" style="min-height: 16em;"></trix-editor>
                    </div>
                    {{-- <button type="submit" class="btn btn-dark">Published</button> --}}
                </form>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
    </div>

</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</html>
