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
        @foreach($list_team as $team)
        <div class="col-sm-3 mb-4">

            <img src="{{ $team->profile }}" alt=""
            style ="border-radius: 100%">
            <h4 class="mb-0">{{$team->nama}}</h4>
            <p> {{$team->bio}}</p>
            <a href="{{ route('about-us.detail', [$team->id]) }}" class="btn btn-primary btn-sm">Detail</a>
    </div>
        @endforeach
    </div>
    </div>
</div>
@endsection
