<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;

class AssessmentController extends Controller
{
    public function index()
    {
        return view('assessment.index');
    }
}
