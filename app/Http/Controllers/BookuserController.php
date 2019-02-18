<?php

namespace App\Http\Controllers;

use App\Bookuser;
use App\Post;
use DB;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class BookuserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        if(Auth::user()->id==1){

        $bookusers = DB::table('bookusers')
                ->join('users', 'bookusers.user_id', '=', 'users.id')
                ->select('bookusers.*', 'users.name', 'users.id')
                // ->get();
                ->orderBy('bookusers.id', 'desc')
                ->paginate(2);
        return view('admin/index', ['bookusers' => $bookusers]);
        
        }else{
            return redirect('/');
        }
    }
    public function bookusercreate()
    {
        $validator = validator(request()->all(), [
            "carline" => "required",
            "destination" => "required",
            "seats" => "required",
            "due_date" => "required"
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $bookuser = new Bookuser();
        $bookuser ->user_id = request()->user_id;
        $bookuser ->carline = request()->carline;
        $bookuser ->destination = request()->destination;
        $bookuser ->seats = request()->seats;
        $bookuser ->due_date = request()->due_date;
        $bookuser ->save();

        return redirect('userview/completebook');
    }
    public function completebooks()
    {
        // $bookusers = Bookuser::orderBy('id', 'desc')->paginate(2);
        $bookusers = DB::table('bookusers')
                ->join('users', 'bookusers.user_id', '=', 'users.id')
                ->select('bookusers.*', 'users.name', 'users.id')
                ->where('users.id', '=', Auth::id())
                // ->get();
                ->orderBy('bookusers.id', 'desc')
                ->paginate(1);
        return view('userbook/completebook', ['bookusers' => $bookusers]);
    }
    public function edit($id)
    {
        $bookuser = Bookuser::find($id);

        return view('userbook/seatsNumberEdit', [
            'bookuser' => $bookuser
        ]);
    }
    public function update($id)
    {
        $bookuser = Bookuser::find($id);
        $bookuser->seats = request()->seats;
        $bookuser->save();

        return redirect("/userview/completebook");
       
    }
    public function delete($id)
    {
        $bookuser = Bookuser::find($id);
        $bookuser->delete();

        return redirect("/userview/completebook");
    }


}

// tmr completebook more clickbutton nk userbook akone pyn kyae loz ya ag shorlink yay view template