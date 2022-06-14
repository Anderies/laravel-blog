{{-- @dd($Nama) --}}
<h1>Nama : {{ $Nama }}</h1>
<h1>Level : {{ $level }}</h1>
<H1> Gold : {{ $gold }} Gold </H1>


{{-- Form button type=submit --}}
<form action="/game/post" method="post">
    <button type="submit">+</button>
</form>

<button>-</button>