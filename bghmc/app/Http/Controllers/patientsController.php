<?php

namespace App\Http\Controllers;

use App\Http\Requests\patientsFormRequest;
use App\Models\patient;
use App\Models\patients;
use Illuminate\Http\Request;

class patientsController extends Controller
{

    public function index(){
        $patients = patients::all();
        return view('patients.list' , compact('patients'));
        
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(patientsFormRequest $request){

        $data = $request->validated();

        $patients = patients::create($data);
        return redirect('/Add-patients')->with('message' , 'Patients Succefuly Added!!');
    }

    public function edit($patients_id)
    {
        $patients = patients::find($patients_id);

        return view('patients.edit', compact('patients'));
    }

    public function update(patientsFormRequest $request, $patients_id)
    {
        $data = $request->validated();

        $patients = patients::where('id', $patients_id)->update([
            'Fname' => $data['Fname'],
            'Lname' => $data['Lname'],
            'Address' => $data['Address'],
            'Birthdate' => $data['Birthdate'],
            'Admission' => $data['Admission'],
        ]);

        return redirect('list')->with('message' , 'Patients Information Succefuly Updated');
    }

    public function destroy($patients_id)
    {
        $patients = patients::find($patients_id)->delete();
        return redirect('list')->with('message' , 'Patients Has been Discharge');
    }

}
