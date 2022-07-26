<h1>Helo post from controller</h1>

<br>
@php
$nama ='hana';

@endphp

@if($nama == 'hana')
    <h1> Hello, {{ $nama}}</h1>
        
    @else
        Hello guest
    @endif