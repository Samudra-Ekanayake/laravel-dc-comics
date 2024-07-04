@extends('layouts.app')

<h1>Lista fumetti</h1>

@foreach ($store as $comics)
<h1>{{ $comics['title'] }}</h1>
<img src="{{ $comics['thumb'] }}" alt="">
{{-- <p>{{ $comics['description'] }}</p> --}}

@endforeach
