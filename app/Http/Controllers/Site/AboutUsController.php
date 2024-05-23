<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\OurValue;
use App\Models\Question;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
         $questions = Question::latest()->get();
         $values = OurValue::latest()->get();
        return view('site.aboutUs.index',compact('questions','values'));
    }
}
