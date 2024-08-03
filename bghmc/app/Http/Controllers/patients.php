<?php

namespace App\Http\Controllers;

use App\Http\Requests\patientsFormRequest;
use Illuminate\Http\Request;

class patients extends Controller
{
    public function create()
    {
        return view('patients.create');
    }

    public function store(patientsFormRequest $request)
    {
        $data = $request->validated();

        $patients = patients::create($data);
        return redirect()->with('message','Patient Added!');

        //manual
        //$patients = patients::creat([
            //'Fname=>$data['Fname'],
            //'Lname=>$data['Lname'],
            //'Address=>$data['Address'],
            //'Birthdate=>$data['Birthdate'],
            //'Admission=>$data['Addmission'],
        //]);

    }
}
