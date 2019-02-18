@extends('layouts/app')

@section('content')

    <div class="container">
        <div class="completeTicket">
            <b>Complete Your Reorder Ticket!</b>
            <!-- <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"> -->
            <!-- <input type="hidden" value="{{ Auth::user()->id }}" name="users.id" > -->
            @foreach($bookusers as $bookuser)
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <!-- <input type="hidden" value="{{ Auth::user()->id }}" name="users.id" > -->
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
                <!-- <div class="panel-footer">
                    <a href="{{ url('userview/completebook/edit/' .$bookuser->id) }}" class="btn btn-default">Edit</a>
                    <a href="{{ url("userview/completebook/delete/$bookuser->id") }}" class="btn btn-danger">Delete</a>
                </div> -->
            </div>
            @endforeach
        </div>
        <a href="{{ url('/userview') }}" class="btn btn-success">Back</a>
    </div>

@endsection
