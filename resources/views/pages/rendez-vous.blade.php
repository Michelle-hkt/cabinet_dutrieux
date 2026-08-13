@extends('layouts.publicLayout')

@section('title', config('app.name', 'Cabinet Dutrieux Notaires'))

@section('content')

    <x-rendezVous.hero-contain />

    <x-rendezVous.main-contain />

@endsection