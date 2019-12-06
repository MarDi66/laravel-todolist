@extends('layouts.app')

@section('content')
<h1>Create new todo</h1>
<form method="POST" action="/todo">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" name="content" id="content" placeholder="Enter content">
    </div>
    <div class="form-group">
        <label for="due">Due</label>
        <input type="text" class="form-control" name="due" id="due" placeholder="Enter due">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection