@extends('layouts/app')

@section('content')

<div class="container">
<div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{ $err . " " }}
            @endforeach
        </div>
    @endif
    <form method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="carline">Car Line</label>
            <input type="text" name="carline" class="form-control">
        </div>
        <input type="submit" value="Add" class="btn btn-primary">
        <a href="{{ url("/post/carlinelist") }}" class="btn btn-default">Back</a>
    </form>
</div>

@endsection