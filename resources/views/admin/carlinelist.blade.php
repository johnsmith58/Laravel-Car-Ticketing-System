@extends('layouts/app')

@section('content')

<div class="container">
<div class="selectcarline">
        <div class="panel panel-info">
            @foreach($posts as $post)

                <div class="panel-heading">
                {{ $post['carline'] }}
                <a href="{{ url('post/delete/' .$post->id) }}" class="pull-right">/ Delete</a>
                <a href="{{ url('post/edit/' .$post->id) }}" class="pull-right">Edit</a>
                
                </div>
               
                
            @endforeach
            </div>
    </div>

    <a href="{{ url('post/add') }}" class="btn btn-success">Add Car Line</a> 
    <a href="{{ url("/admin") }}" class="btn btn-default">Back</a>
    
</div> <!-- container -->

@endsection