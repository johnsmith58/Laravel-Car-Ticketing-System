@extends('layouts/app')

@section('content')

<div class="container">
    <form method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label>Car Line Name</label>
            <input type="text" name="carline" class="form-control" value="{{ $post->carline }}">
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
        <a href="{{ url("/post/carlinelist") }}" class="btn btn-default">Back</a>
    </form>
    
</div>

@endsection