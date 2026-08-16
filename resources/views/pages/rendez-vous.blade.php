@extends('layouts.publicLayout')

@section('title', config('app.name', 'Cabinet Dutrieux Notaires'))

@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')

    <x-rendezVous.hero-contain />

    <x-rendezVous.main-contain />

@endsection