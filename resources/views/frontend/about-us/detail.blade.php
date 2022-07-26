@extends('layout.base')
@section('content')

{{-- <h2> About Us </h2> --}}
<div class="container">
    <br>
    <div class="text-center">
        <h1>Meet <small>the</small> TEAM</h1>
        <p> Our Description</p>
    </div>
    <div class="row">

        <div class="col-sm-3 mb-4">

            <img src="{{ $data->profile }}" alt=""
            style ="border-radius: 100%">
            <h4 class="mb-0">{{$data->nama}}</h4>
            <p> {{$data->bio}}</p>
            <a href="{{ route('about-us') }}" class="btn btn-primary btn-sm">Kembali</a>
    </div>

    </div>
    </div>
</div>
@endsection
