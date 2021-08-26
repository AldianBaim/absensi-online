@extends('user.layouts')

@section('content')

<div>
    Hai <b>{{ session('username') }}</b>, selamat datang di sistem absensi PT. Codepolitan Integrasi Indonesia. <br />
    <small>Kamis, 27 Juni 2021</small>
</div>

<div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://via.placeholder.com/200x100" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://via.placeholder.com/200x100" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://via.placeholder.com/200x100" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<hr />

<div class="mt-3">
    <a href="absen-online.html" class="btn btn-primary btn-block m-1">Absen Online</a>
    <a href="izin-online.html" class="btn btn-primary btn-block m-1">Izin Online</a>
    <a href="lihat-gaji.html" class="btn btn-primary btn-block m-1">Lihat Gaji</a>
    <a href="history-absen.html" class="btn btn-primary btn-block m-1">History Absen</a>
    <a href="{{ url('user/logout') }}" class="btn btn-danger btn-block m-1 mt-4">Logout</a>
</div>

@endsection