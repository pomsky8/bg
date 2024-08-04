<?php

namespace App\Http\Controllers;

use App\Http\Requests\patientsFormRequest;
use App\Models\patient;
use App\Models\patients;
use Illuminate\Http\Request;

class patientsController extends Controller
{
    public function create()
    {
        return view('patients.create');
    }

    public function store(patientsFormRequest $request){

        $data = $request->validated();

        $patients = patients::create($data);
        return redirect('/patients')->with('message' , 'Patients Succefuly Added!!');
    }
}
