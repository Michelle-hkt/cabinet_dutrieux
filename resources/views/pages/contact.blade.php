@extends('layouts.publicLayout')

@section('title', config('app.name', 'Cabinet Dutrieux Notaires'))

@section('content')

    <x-contact.hero-contact />

    <x-contact.contact-contain />

@endsection