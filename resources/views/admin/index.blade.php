@extends('layouts/app')

@section('content')

    <div class="container">
        <div class="ordersTicker">
            <!-- original -->
            @foreach($bookusers as $bookuser)
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="panel panel-info">

                <div class="panel-heading">
                    <b>{{ $bookuser->user->name }}</a></b>
                </div>

                <div class="panel-body">
                    <p>
                    <i class="fas fa-bus-alt"></i>  
                    Carline - {{ $bookuser->carline }}
                    </p>
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



    
    
