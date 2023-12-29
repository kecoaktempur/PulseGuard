<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::paginate(10);
        return view('doctor.index', compact('doctors'));
    }

    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        $patients = Patient::whereHas('assessments', function ($query) use ($id) {
            $query->where('is_finished', 1)
                  ->whereHas('doctors', function ($nestedQuery) use ($id) {
                      $nestedQuery->where('doctor_id',$id);
                  });
        })->paginate(5);
        return view('doctor.show', compact('doctor', 'patients'));
    }
}
