<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingRequest;
use App\Repositories\Contract\SettingRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    protected $settingRepository;

    public function __construct(SettingRepositoryInterface $settingRepository)
    {

        $this->settingRepository = $settingRepository;
    } // end of contruct

    public function create()
    {

        $settings = $this->settingRepository->getAll(['column' => 'id', 'dir' => 'ASC']);

        return view('dashboard.settings.edit', compact('settings'));
    } // end of create

    public function store(SettingRequest $request)
    {

        $attribute = $request->except('_token', '_method', 'logo', 'footer_logo', 'favicon', 'about_us_first_image', 'about_us_second_image', 'slider_image', 'footer_image', 'home_about_image', 'home_about_icon');

        $logo                  = $this->settingRepository->getWhere([['key', 'logo']])->first()['value'];
        $footer_logo           = $this->settingRepository->getWhere([['key', 'footer_logo']])->first()['value'];
        $favicon               = $this->settingRepository->getWhere([['key', 'favicon']])->first()['value'];
        $slider_image          = $this->settingRepository->getWhere([['key', 'slider_image']])->first()['value'];
        $footer_image          = $this->settingRepository->getWhere([['key', 'footer_image']])->first()['value'];
        $home_about_image      = $this->settingRepository->getWhere([['key', 'home_about_image']])->first()['value'];
        $home_about_icon       = $this->settingRepository->getWhere([['key', 'home_about_icon']])->first()['value'];
        $home_contact_image    = $this->settingRepository->getWhere([['key', 'home_contact_image']])->first()['value'];
        $ceo_photo    = $this->settingRepository->getWhere([['key', 'ceo_photo']])->first()['value'];

        if ($request->has('logo')) {

            // Delete old internal_image
            Storage::delete($logo);

            // Upload new internal_image
            $attribute['logo'] = $request->file('logo')->store('setting');
        }
        if ($request->has('home_contact_image')) {

            // Delete old internal_image
            Storage::delete($home_contact_image);

            // Upload new internal_image
            $attribute['home_contact_image'] = $request->file('home_contact_image')->store('setting');
        }
        if ($request->has('ceo_photo')) {

            // Delete old internal_image
            Storage::delete($ceo_photo);

            // Upload new internal_image
            $attribute['ceo_photo'] = $request->file('ceo_photo')->store('setting');
        }

        if ($request->has('home_about_icon')) {

            // Delete old internal_image
            Storage::delete($home_about_icon);

            // Upload new internal_image
            $attribute['home_about_icon'] = $request->file('home_about_icon')->store('setting');
        }
        if ($request->has('home_about_image')) {

            // Delete old internal_image
            Storage::delete($home_about_image);

            // Upload new internal_image
            $attribute['home_about_image'] = $request->file('home_about_image')->store('setting');
        }
        if ($request->has('slider_image')) {

            // Delete old internal_image
            Storage::delete($slider_image);

            // Upload new internal_image
            $attribute['slider_image'] = $request->file('slider_image')->store('setting');
        }

        if ($request->has('footer_image')) {

            // Delete old internal_image
            Storage::delete($footer_image);

            // Upload new internal_image
            $attribute['footer_image'] = $request->file('footer_image')->store('setting');
        }

        if ($request->has('footer_logo')) {

            // Delete old internal_image
            Storage::delete($footer_logo);

            // Upload new internal_image
            $attribute['footer_logo'] = $request->file('footer_logo')->store('setting');
        }

        if ($request->has('favicon')) {

            // Delete old internal_image
            Storage::delete($favicon);

            // Upload new internal_image
            $attribute['favicon'] = $request->file('favicon')->store('setting');
        }

        if ($request->has('about_us_first_image')) {

            // Delete old internal_image
            Storage::delete($about_us_first_image);

            // Upload new internal_image
            $attribute['about_us_first_image'] = $request->file('about_us_first_image')->store('setting');
        }

        if ($request->has('about_us_second_image')) {

            // Delete old internal_image
            Storage::delete($about_us_second_image);

            // Upload new internal_image
            $attribute['about_us_second_image'] = $request->file('about_us_second_image')->store('setting');
        }

        $this->settingRepository->updateSetting($attribute);

        return redirect()->back()->with('success', __('models.update_success'));
    } // end of update
}
