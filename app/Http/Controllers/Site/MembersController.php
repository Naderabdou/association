<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $directors = Director::latest()->get();
        return view('site.members.index', compact('directors'));
    } // end of index
}
