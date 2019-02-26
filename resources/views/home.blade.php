@extends('master')
@section('title', 'Home - Tonoy')
    
@section('content')
    <h1>This is Home Page</h1>
    <p>Here I'm your instructor Md. Tonoy Akanda. My siblings and cousins are </p>
    <ol>
        @foreach ($names as $name)
            <li>😎 {{ $name }}</li>
        @endforeach
    </ol>
    
@endsection