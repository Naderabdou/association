<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CommitteeCategory;
use Illuminate\Http\Request;

class CommitteesController extends Controller
{
    public function index()
    {
        $committees= CommitteeCategory::whereHas('committees')->latest()->get();
        return view('site.committees.index', compact('committees'));
    }
}
