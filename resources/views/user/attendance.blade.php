@extends('user.layouts')

@section('content')

<div class="card p-3 shadow rounded">
    <div id="msg"></div>
    <div>
        Hai <b>{{ ucfirst(session('username')) }}</b>, selamat datang di sistem absensi PT. Codepolitan Integrasi Indonesia. <br />
        <small>{{ date('D, d F Y') }}</small>
    </div>

    <hr />


    <div class="mt-3">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.092923525442!2d107.58773561437687!3d-6.879470269225341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e68e46d527c3%3A0x80c53eeb41601c6e!2sCodePolitan!5e0!3m2!1sen!2sid!4v1629715422184!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>


    <div class="mb-3 text-center">
        <input type="hidden" id="user_id" value="{{ session('user_id') }}">
        <button class="btn btn-primary mt-3" id="attendance">Mulai Absen</button>
    </div>
    <div id="result"></div>
    <!-- <a href="{{ url('user/home') }}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a> -->


</div>

@endsection