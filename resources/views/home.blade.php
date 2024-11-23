@extends('layouts.app')

@section('title', 'Beranda - Belajar Laravel')

@section('content')

<div class="container">
    <div class="welcome">
        <h1>Selamat Datang di Belajar Laravel</h1>
        <p>Platform belajar framework Laravel untuk semua tingkatan.</p>
        <a href="{{ route('about') }}">Tentang Kami</a>
    </div>
</div>

@endsection
