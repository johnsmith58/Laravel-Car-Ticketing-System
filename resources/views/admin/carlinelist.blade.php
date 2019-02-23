@extends('layouts/app')

@section('content')

<div class="container">
<div class="selectcarline">
        <div class="panel panel-info">
            @foreach($posts as $post)

                <div class="panel-heading">
                {{ $post['carline'] }}
                <a href="{{ url('post/delete/' .$post->id) }}" class="pull-right">/  <i class="fas fa-trash-alt"></i></a>
                <a href="{{ url('post/edit/' .$post->id) }}" class="pull-right">
                <i class="far fa-edit"></i>
                Edit
                </a>
                
                </div>
               
                
            @endforeach
            </div>
    </div>

    <a href="{{ url('post/add') }}" class="btn btn-success">
    <i class="fas fa-plus-circle"></i>
    Add Car Line
    </a> 
    <a href="{{ url("/admin") }}" class="btn btn-default">Back</a>
    
</div> <!-- container -->

@endsection