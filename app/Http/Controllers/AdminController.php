<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddDoctorRequest;
use App\Model\Doctor;
use App\Models\Doctor as ModelsDoctor;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.add_doctor');
    }

    public function store(AddDoctorRequest $request)
    { 
        $imageName = time().'.'.$request->file('photo')->getClientOriginalExtension();
        $path = $request->file('photo')->move(public_path('assets/img/doctors'), $imageName);
       
        $doctor = new ModelsDoctor;
        $doctor->name = $request->name;
        dd($doctor->name);
       
        return redirect()->back();
    }
}
