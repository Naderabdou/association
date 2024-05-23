<?php

namespace App\Http\Controllers\Site;

use App\Models\Regulation;
use Illuminate\Http\Request;
use App\Models\RegulationCategory;
use App\Http\Controllers\Controller;

class RegulationsController extends Controller
{
    public function index()
    {
        $regulationsCategory = RegulationCategory::whereHas('regulations')->withCount('regulations')->latest()->get();

        return view('site.regulations.index', compact('regulationsCategory'));
    } // end index
}
