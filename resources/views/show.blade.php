@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-secondary mt-2">Go back</a>
    <h1 class="mt-4">{{ $todo->title }}</h1>
    <div class="badge badge-info">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->content }}</p>
    <a href="/todo/{{ $todo->id }}/edit " class="btn btn-primary mt-2">Edit</a>
    <a href="/todo/{{ $todo->id }}/edit " class="btn btn-danger mt-2 float-right">Delete</a>
@endsection