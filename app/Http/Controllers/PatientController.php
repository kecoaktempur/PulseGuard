<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Patient;
use App\Models\Question;
use App\Models\AssessmentQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index()
    {
        if (Auth::guard('doctors')->check()) {
            $patients = Patient::whereHas('assessments', function ($query) {
                $query->where('is_finished', 1)
                      ->whereHas('doctors', function ($nestedQuery) {
                          $nestedQuery->where('doctor_id', Auth::guard('doctors')->user()->id);
                      });
            })->paginate(10);
        }
        else if (Auth::guard('admins')->check()) {
            $patients = Patient::whereHas('assessments', function ($query) {
                $query->where('is_finished', 1);
            })->paginate(10);
        }
        return view('patient.index', compact('patients'));
    }

    public function show($id)
    {
        $questions = Question::all();
        $answers = AssessmentQuestion::all();
        $patient = Patient::findOrFail($id);
        $assessments = Assessment::where('is_finished', 1)->whereHas('patients', function ($query) use ($id) {
            $query->where('patient_id', $id);
        })->paginate(5);

        return view('patient.show', compact('questions', 'answers', 'patient', 'assessments'));
    }
}
