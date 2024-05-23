<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\OurPaths;
use Illuminate\Http\Request;

class PathsController extends Controller
{
    public function index()
    {
        $paths = OurPaths::latest()->get();
        return view('site.paths.index', compact('paths'));
    } // end index
}
