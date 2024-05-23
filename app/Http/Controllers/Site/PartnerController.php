<?php

namespace App\Http\Controllers\Site;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::latest()->paginate(9);
        return view('site.partners.index', compact('partners'));
    }
}
