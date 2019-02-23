@extends('layouts/app')

@section('content')

    <div class="container">
        <div class="completeTicket">
            <b>Complete Your Reorder Ticket!</b>
            
            @foreach($bookusers as $bookuser)
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            
            <div class="panel panel-info">

                <div class="panel-heading">
                    <b><i class="fas fa-user-circle"></i>
                    {{ $bookuser->name}}
                    </a></b>
                </div>

                <div class="panel-body">
                    <p>
                    <i class="fas fa-bus-alt"></i> 
                    Carline - {{ $bookuser->carline }}</p>

                    <i>
                    <i class="fas fa-map-marked-alt"></i>
                    Destination - {{ $bookuser->destination }}
                    </i><br>

                    <b>
                    <i class="fas fa-chair"></i>
                    Seats Number - {{ $bookuser->seats }}
                    </b><br>
                    <b>
                    <i class="far fa-calendar-alt"></i>
                    Due Date - {{ $bookuser->due_date }}
                    </b>
                </div>
                
            </div>
            @endforeach
        </div>
        <a href="{{ url('/userview') }}" class="btn btn-success">Back</a>
    </div>

@endsection
