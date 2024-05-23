<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Membership;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = Membership::latest()->get();
        return view('dashboard.memberships.index', compact('memberships'));
    }
}
