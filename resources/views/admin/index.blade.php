@extends('layouts/app')

@section('content')

    <div class="container">
        <div class="ordersTicker">
            
            @foreach($bookusers as $bookuser)
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="panel panel-info">

                <div class="panel-heading">
                    <b>{{ $bookuser->name}}</a></b>
                </div>

                <div class="panel-body">
                    <p>Carline - {{ $bookuser->carline }}</p>
                    <i>Destination - {{ $bookuser->destination }}</i><br>
                    <b>Seats Number - {{ $bookuser->seats }}</b><br>
                    <b>Due Date - {{ $bookuser->due_date }}</b>
                </div>
                <div class="panel-footer">
                    <i>{{ $bookuser->created_at }}</i>
                </div>
                
            </div>
            @endforeach
        </div>
        {{ $bookusers->links() }}
        <a href="{{ url('post/carlinelist') }}" class="btn btn-success pull-right">Car Line</a>
       
    </div>

@endsection



    
    
