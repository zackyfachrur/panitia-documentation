@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="css/style.css">
    <h1>{{ $title }}</h1>
    <img src="images/{{ $image }}" alt="avatar" class="avatar">
    <a href="/panitia" class="continue-text"><button class="btn btn-primary continue">Continue</button></a>
    <i class="ri-whatsapp-fill"></i>

@endsection
