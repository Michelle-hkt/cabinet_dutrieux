@extends('layouts.publicLayout')

@section('title', config('app.name', 'Cabinet Dutrieux Notaires'))

@section('content')

    <x-blog.hero-blog />

    <x-blog.main-contain-blog :articles="$articles" />

@endsection