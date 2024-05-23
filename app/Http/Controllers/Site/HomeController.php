<?php

namespace App\Http\Controllers\Site;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Subscribe;
use App\Models\Membership;
use App\Models\OurProgram;
use App\Mail\MembershipMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
   public function index()
   {
       $programing = OurProgram::latest()->get();
       $blogs = Blog::latest()->get();
       $partners = Partner::latest()->get();
       return view('site.home', compact('programing', 'blogs', 'partners'));
   }
   public function sendContact(Request $request){

    Contact::create($request->all());
    return response()->json(['success' => __('تم ارسال الرسالة بنجاح وسوف يتم الرد عليك في اقرب وقت')]);
   }

   public function subscribe(Request $request)
    {

        Subscribe::create($request->all());

        return response()->json(['success' => __('تم الاشتراك بنجاح وسوف يتم ارسال الاخبار اليك في اقرب وقت ممكن')]);
    }

    public function lang($lang)
    {

        session()->put('lang', $lang);
        return redirect()->back();
    }

    public function showForm()
    {
       return view('site.requestmembership');
    }

    public function membershipStore(Request $request)
    {
        $data = $request->all();
        if($request->hasFile('payment_receipt')){

            $data['payment_receipt'] = $request->file('payment_receipt')->store('membership', 'public');
        }
      $membership=  Membership::create($data);

    //   $dataEmail = [
    //     'name' => $membership->name,
    //     'email' => $membership->email,
    //   ];

    //     Mail::to( getSetting('email'))->send(new MembershipMail($dataEmail));

        return response()->json(['success' => __('تم ارسال الطلب بنجاح وسوف يتم الرد عليك في اقرب وقت')]);
    }

}
