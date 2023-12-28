<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller {
    public function dashboard() {
        if (Auth::guard('web')->check()){
            $lastAssessment = Assessment::where('is_finished', 1)->whereHas('patients', function ($query) {
                $query->where('patient_id', Auth::user()->id);
            })->latest()->first();

            return view('dashboard', compact('lastAssessment'));
        }
        else if (Auth::guard('doctors')->check()){
            $assessments = Assessment::whereHas('doctors', function ($query) {
                $query->where('doctor_id', Auth::guard('doctors')->user()->id);
            });
            $patients = Patient::whereHas('assessments', function ($query) {
                $query->whereHas('doctors', function ($nestedQuery) {
                          $nestedQuery->where('doctor_id', Auth::guard('doctors')->user()->id);
                      });
            });
            return view('dashboard', compact('assessments', 'patients'));
        }
        else {
            $assessments = Assessment::all();
            $patients = Patient::all();
            return view('dashboard', compact('assessments', 'patients'));
        }
    }

    public function landing() {
        return view('landing');
    }
}