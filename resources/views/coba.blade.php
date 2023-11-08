@extends('template')
@section('main')
    <h1>Ini halaman Coba</h1>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h1>Ini menggunakan blade</h1>
        @endif
    @endfor

    @php
        $no = 5;
        echo $no;
    @endphp

    <img src="{{ asset('img/photo-167.jpeg') }}" alt="" width="300px">
@endsection
