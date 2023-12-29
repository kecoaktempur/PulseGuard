<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        if (Auth::guard('web')->check()) {
            $lastAssessment = Assessment::where('is_finished', 1)->whereHas('patients', function ($query) {
                $query->where('patient_id', Auth::user()->id);
            })->latest()->first();

            $takenAssessment = Assessment::where('is_finished', 0)->whereHas('patients', function ($query) {
                $query->where('patient_id', Auth::user()->id);
            })->first();

            return view('dashboard', compact('lastAssessment', 'takenAssessment'));
        } else if (Auth::guard('doctors')->check()) {
            $patients = Patient::whereHas('assessments', function ($query) {
                $query->where('is_finished', 1)
                    ->whereHas('doctors', function ($nestedQuery) {
                        $nestedQuery->where('doctor_id', Auth::guard('doctors')->user()->id);
                    });
            })->get();

            $assessments = Assessment::join('patient_assessment', 'assessments.id', '=', 'patient_assessment.assessment_id')
                ->where('assessments.is_finished', 1)
                ->whereHas('doctors', function ($query) {
                    $query->where('doctor_id', Auth::guard('doctors')->user()->id);
                })
                ->groupBy('patient_assessment.patient_id', 'assessments.id', 'assessments.datetime', 'assessments.status')
                ->select('assessments.id', 'assessments.datetime', 'assessments.status', 'patient_assessment.patient_id')
                ->orderBy('assessments.id', 'desc')
                ->get()
                ->unique('patient_id');

            return view('dashboard', compact('assessments', 'patients'));
        } else {
            $patients = Patient::all();
            $assessments = Assessment::join('patient_assessment', 'assessments.id', '=', 'patient_assessment.assessment_id')
                ->where('assessments.is_finished', 1)
                ->groupBy('patient_assessment.patient_id', 'assessments.id', 'assessments.datetime', 'assessments.status')
                ->select('assessments.id', 'assessments.datetime', 'assessments.status', 'patient_assessment.patient_id')
                ->orderBy('assessments.id', 'desc')
                ->get()
                ->unique('patient_id');


            return view('dashboard', compact('assessments', 'patients'));
        }
    }

    public function landing()
    {
        return view('landing');
    }
}
