<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect(){

        if(Auth::id()){
            if(Auth::user()->user_type == '0'){

                return view('user.home');
            }
            else{
                return view('admin.home');
            }
        }
        else {
            return redirect()->back();
        }
    }

    public function index(){
        $doctors = Doctor::all();
        return view('user.home', compact('doctors', $doctors));
    }
}
