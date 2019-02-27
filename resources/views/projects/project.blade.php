@extends('master')
@section('title', 'Project - Tonoy')
    
@section('content')
    <h3>Projects</h3>
    <ul>
        @foreach ($projects_list as $project)
            <li>{{ $project -> title }}</li>
            <p style="margin-left:30px;">{{ $project -> description }}</p>
        @endforeach
    </ul>
@endsection