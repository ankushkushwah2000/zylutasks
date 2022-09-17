<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('welcome',compact('data'));
    }
    public function store(Request $r){
        $data = new User();
        $data->name=$r->name;
        $data->email=$r->email;
        $data->password=Hash::make($r->password);
        $data->created_at=$r->date;
        $data->save();
        return redirect()->back()->with('message','user add successfully :)');
    }
}
