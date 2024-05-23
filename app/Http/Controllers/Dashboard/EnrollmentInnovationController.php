<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnrollmentInnovationController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::latest()->get();
        return view('dashboard.enrollments.index', compact('enrollments'));
    }
}
