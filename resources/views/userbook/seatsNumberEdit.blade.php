@extends('layouts/app')

@section('content')

    <div class="container">
       <form action="" method="post">
       {{ csrf_field() }}
       <div class="panel-heading">
        <label for="seats">Return Seats Number</label>
        <select name="seats" id="" value="">
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
        </div>
        <input type="submit" value="Update" class="btn btn-success">
        <a href="{{ url('/userview/completebook') }}" class="btn btn-primary">Back</a>
       </form>
       
    </div>

@endsection