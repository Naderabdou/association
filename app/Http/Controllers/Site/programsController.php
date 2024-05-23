<?php

namespace App\Http\Controllers\Site;

use App\Models\Enrollment;
use App\Models\OurProgram;
use App\Mail\MembershipMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class programsController extends Controller
{
    public function index()
    {
        $programs = OurProgram::latest()->get();
        return view('site.programs.index', compact('programs'));
    } // end index

    public function programForm($id)
    {
        $program = OurProgram::findOrFail($id);

        return view('site.programs.innovationProgramme', compact('program'));
    }

    public function programStore(Request $request)
    {
        $data = $request->all();
        if ($request->remember_me) {
            if ($data['remember_me'] == 'on') {
                $data['remember_me'] = 1;
            } else {
                $data['remember_me'] = 0;
            }
        }

        Enrollment::create($data);
        $enrollment = [
            'name' => $data['name'],
            'email' => $data['email'],
        ];
        Mail::to( getSetting('email'))->send(new MembershipMail($enrollment));

        return response()->json(['success' => transWord('تم طلب البرنامج بنجاح سيتم التواصل معكم قريباً')]);
    } // end store
}
