@extends('layouts.publicLayout')

@section('title', config('app.name', 'Cabinet Dutrieux Notaires'))

@section('content')

    <x-home.hero />

    <x-home.cabinet />

    <x-home.philosophy />

    <x-home.expertise />

    <x-home.approach />

    <x-home.why-choose-us />

    <x-home.team />

    <x-home.final-cta />

@endsection