@extends('layouts/app')

@section('content')

    <div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{ $err . " " }}
            @endforeach
        </div>
    @endif
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <div class="form">
        <form method="post">
            {{ csrf_field() }}
        
    
        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
        <!-- <input type="hidden" value="{{ Auth::user()->id }}" name="users.id"> -->

        <div class="select">
            <label for="carline">Car Line</label><br>
                <select name="carline" class="selectcarline form-control">

                    @foreach($userbooks as $carlines)
                        <option>{{ $carlines['carline'] }}</option>
                    @endforeach

                </select> <!-- selectcarline -->
        </div> <!-- select -->
        <div class="due_date">
            <label for="due_date">Due Date</label><br>
                <input type="text" name="due_date" id="date" placeholder="YY-MM-DD" class="form-control">
        </div> <!-- due_date -->

        <div class="destination">
            <label for="destination">Destination</label><br>
                <select name="destination" id="" class="form-control">
                    <option value="" disabled>Please Select</option>
                    <option value="Yangon To Manday">Yangon To Manday</option>
                    <option value="Yangon To Nay Pyi Taw">Yangon To Nay Pyi Taw</option>
                    <option value="Yangon To Shan">Yangon To Shan</option>
                    <option value="Yangon To Myint Kyi Narr">Yangon To Myint Kyi Narr</option>
                    <option value="Yangon To Ayeyawady">Yangon To Ayeyawady</option>
                    <option value="Yangon To Kachin">Yangon To Kachin</option>
                    <option value="Yangon To Pago">Yangon To Pago</option>
                    <option value="Yangon To Pyin Oo Lwin">Yangon To Pyin Oo Lwin</option>
                </select>
        </div> <!-- destination -->

        <div class="seatsNumber">
            <label for="seatsnumber">Choose Seats Number</label><br>
                <select name="seats" id="" class="form-control">
                    <option value="" disabled>Please Select</option>
                    <option value="1">Seats Number 1</option>
                    <option value="2">Seats Number 2</option>
                    <option value="3">Seats Number 3</option>
                    <option value="4">Seats Number 4</option>
                    <option value="5">Seats Number 5</option>
                    <option value="6">Seats Number 6</option>
                    <option value="7">Seats Number 7</option>
                    <option value="8">Seats Number 8</option>
                    <option value="9">Seats Number 9</option>
                    <option value="10">Seats Number 10</option>
                    <option value="11">Seats Number 11</option>
                    <option value="12">Seats Number 12</option>
                </select>
        </div> <!-- seatsNumber -->

                <input type="submit" value="submit" class="btn btn-success">
            </form>
        </div> <!-- form -->
    </div> <!-- container -->

@endsection