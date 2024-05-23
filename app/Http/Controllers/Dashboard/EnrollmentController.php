<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnrollmentController extends Controller
{
    public function index($type)
    {

        $enrollments = Enrollment::where('type_program', $type)->latest()->get();
        return view('dashboard.enrollments.index', compact('enrollments', 'type'));
    }
}
