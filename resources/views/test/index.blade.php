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
    <nav>
        <a href="/test/index">Home</a>
        <a href="/test/create">Create</a>
        <a href="/test/update">Update</a>
    </nav>

    {{-- @dd($tulisan) --}}
    @foreach ($tulisan as $tulis)
        <p>{{ $tulis->judul }}</p>
        <p>{{ $tulis->status == 1 ? 'Published' : 'Draft' }}</p>
        <p>{{ $tulis->hashtag }}</p>
        <p>{{ $tulis->isi }}</p>
    @endforeach

    @yield('test-content')
</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</html>
