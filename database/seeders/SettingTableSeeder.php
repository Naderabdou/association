<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::insert([

            //------------- icon and logo ----------------
            [
                'key'      => 'logo',
                'neckname' => 'الشعار',
                'type'     => 'file',
                'value'    => 'setting/logo.png',
            ],
            [
                'key'      => 'footer_logo',
                'neckname' => 'الشعار السفلى',
                'type'     => 'file',
                'value'    => 'setting/logo.png',
            ],
            [
                'key'      => 'favicon',
                'neckname' => 'ايقونة الموقع',
                'type'     => 'file',
                'value'    => 'setting/favicon.ico',
            ],

            //----------------- end icon and logo ----------------


            //-------------- slider and footer image in Home Page----------------//
            [
                'key'      => 'slider_image',
                'neckname' => 'صور الاسليدر الرئيسية',
                'type'     => 'file',
                'value'    => 'setting/favicon.ico',
            ],
            [
                'key'      => 'footer_image',
                'neckname' => 'صوره الفوتر الرئيسية',
                'type'     => 'file',
                'value'    => 'setting/favicon.ico',
            ],
            //---------- end slider and footer in home page ----------//



            //---------- image and icon home page about us ----------------//
            [
                'key'      => 'home_about_image',
                'neckname' => 'صوره عن الجمعيه في الرئيسة',
                'type'     => 'file',
                'value'    => 'setting/about.png',
            ],
            [
                'key'      => 'home_about_icon',
                'neckname' => 'ايقونه عن الجمعيه في الرئيسة',
                'type'     => 'file',
                'value'    => 'setting/about.png',
            ],
            [
                'key'      => 'home_contact_image',
                'neckname' => 'صوره اتصل بنا في الرئيسة',
                'type'     => 'file',
                'value'    => 'setting/about.png',
            ],
            //----------end image and icon home page about us ----------------//



            //--------- description and feature home page about us ----------------//
            [
                'key'      => 'home_about_desc_ar',
                'neckname' => 'نص عن التطبيق في الرئيسة بالعربيه',
                'type'     => 'textarea',
                'value'    => 'جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار.'
            ],

            [
                'key'      => 'home_about_desc_en',
                'neckname' => 'نص عن التطبيق في الرئيسة بالانجليزي',
                'type'     => 'textarea',
                'value'    => 'The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation.'
            ],

            [
                'key'      => 'home_about_feature_ar',
                'neckname' => 'مميزات عن التطبيق في الرئيسة بالعربيه',
                'type'     => 'keyword',
                'value'    => 'تطبيق "زاد": رفيقك الروحي في رحلة الإيمانك'
            ],

            [
                'key'      => 'home_about_feature_en',
                'neckname' => 'مميزات عن التطبيق في الرئيسة بالعربيه',
                'type'     => 'keyword',
                'value'    => 'تطبيق "زاد": رفيقك الروحي في رحلة الإيمانك'
            ],

            [
                'key'      => 'home_about_training_programs',
                'neckname' => 'برامج تدريبية',
                'type'     => 'number',
                'value'    => '100'
            ],

            [
                'key'      => 'home_about_Youth_initiative',
                'neckname' => 'مبادرة شبابية',
                'type'     => 'number',
                'value'    => '100'
            ],
            //--------- end description and feature home page about us ----------------//








            //------ name website ---------//
            [
                'key'      => 'name_website_ar',
                'neckname' => 'اسم الموقع بالعربيه',
                'type'     => 'text',
                'value'    => 'جمعية التخطيط والابتكار الاجتماعي'
            ],
            [
                'key'      => 'name_website_en',
                'neckname' => 'اسم الموقع بالانجليزيه',
                'type'     => 'text',
                'value'    => 'Social Planning and Innovation Association'
            ],
            //------ end name website ---------//


            //------ description sliders ---------//
            [
                'key'      => 'slider_desc_ar',
                'neckname' => 'وصف الاسليدر بالعربي',
                'type'     => 'textarea',
                'value'    => 'جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار.'
            ],
            [
                'key'      => 'slider_desc_en',
                'neckname' => 'وصف الاسليدر بالانجليزي',
                'type'     => 'textarea',
                'value'    => 'The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation.'
            ],
            //------ end description sliders ---------//




            //------ vision ---------//
            [
                'key'      => 'our_vision_ar',
                'neckname' => 'رؤيتنا بالعربيه',
                'type'     => 'textarea',
                'value'    => 'جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار.'
            ],

            [
                'key'      => 'our_vision_en',
                'neckname' => 'رؤيتنا بالانجليزيه',
                'type'     => 'textarea',
                'value'    => 'The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation.'
            ],
            //------ end vision ---------//


            //------ message ---------//
            [
                'key'      => 'our_message_ar',
                'neckname' => 'رسالتنا بالعربيه',
                'type'     => 'textarea',
                'value'    => 'جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار.'
            ],

            [
                'key'      => 'our_message_en',
                'neckname' => 'رسالتنا بالانجليزيه',
                'type'     => 'textarea',
                'value'    => 'The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation.'
            ],
            //------ end message ---------//


            //------ goals ---------//
            [
                'key'      => 'our_goals_ar',
                'neckname' => 'اهدافنا بالعربيه',
                'type'     => 'textarea',
                'value'    => 'جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار.'
            ],

            [
                'key'      => 'our_goals_en',
                'neckname' => 'اهدافنا بالانجليزيه',
                'type'     => 'textarea',
                'value'    => 'The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation.'
            ],
            //------ end goals ---------//


            //------ methodology ---------//
            [
                'key'      => 'our_methodology_ar',
                'neckname' => 'منهجنا بالعربيه',
                'type'     => 'textarea',
                'value'    => 'جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار.'
            ],

            [
                'key'      => 'our_methodology_en',
                'neckname' => 'منهجنا بالانجليزيه',
                'type'     => 'textarea',
                'value'    => 'The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation.'
            ],
            //------ end methodology ---------//


            //------ value ---------//
            [
                'key'      => 'our_value_ar',
                'neckname' => 'قيمنا بالعربيه',
                'type'     => 'textarea',
                'value'    => 'جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار.'
            ],

            [
                'key'      => 'our_value_en',
                'neckname' => 'قيمنا بالانجليزيه',
                'type'     => 'textarea',
                'value'    => 'The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation.'
            ],
            //------ end value ---------//

            //------ value ---------//
            [
                'key'      => 'programing_ar',
                'neckname' => 'وصف برامجنا في الرئيسة بالعربي',
                'type'     => 'textarea',
                'value'    => 'تقدم جمعية التخطيط والابتكار الاجتماعي مجموعة متنوعة من البرامج التدريبية في مجالات التخطيط والابتكار الاجتماعي.'
            ],

            [
                'key'      => 'programing_en',
                'neckname' => 'وصف برامجنا في الرئيسة بالانجليزي',
                'type'     => 'textarea',
                'value'    => 'The Society for Planning and Social Innovation offers a variety of training programs in the areas of planning and social innovation.'
            ],
            //------ end value ---------//


            //------ footer description ---------//
            [
                'key'      => 'footer_desc_ar',
                'neckname' => 'النص السفلى بالعربيه',
                'type'     => 'textarea',
                'value'    => 'تقدم جمعية التخطيط والابتكار الاجتماعي مجموعة متنوعة من البرامج التدريبية في مجالات التخطيط والابتكار الاجتماعي.'
            ],
            [
                'key'      => 'footer_desc_en',
                'neckname' => 'النص السفلى بالانجليزيه',
                'type'     => 'textarea',
                'value'    => 'The Society for Planning and Social Innovation offers a variety of training programs in the areas of planning and social innovation.'
            ],
            //------ end footer description ---------//

             // SEO
             [
                'key' => 'seo_title_ar',
                'neckname' => 'عنوان SEO بالعربية',
                'type' => 'text',
                'value' => 'جمعية التخطيط والابتكار الاجتماعي'
            ],

            [
                'key' => 'seo_title_en',
                'neckname' => 'عنوان SEO بالانجليزية',
                'type' => 'text',
                'value' => 'Social Planning and Innovation Association'
            ],

            [
                'key' => 'keyword_ar',
                'neckname' => 'الكلمات المفتاحية بالعربى',
                'type' => 'keyword',
                'value' => json_encode(['الابتكار الاجتماعي ' , 'التخطيط الاجتماعي','برنامج الابتكار الذكائي'])
            ],
            [
                'key' => 'keyword_en',
                'neckname' => 'الكلمات المفتاحية بالانجليزية',
                'type' => 'keyword',
                'value' => json_encode(['Social innovation' , 'Social planning','Intelligent innovation program'])
            ],

            [
                'key' => 'desc_seo_ar',
                'neckname' => 'محتوى SEO بالعربية',
                'type' => 'textarea',
                'value' => 'نحن جمعية التخطيط والابتكار الاجتماعي نقدم مفهوم الاستشارات الأمثل والبصمة السعودية المميزة في جميع منتجاتنا وخدماتنا'
            ],
            [
                'key' => 'desc_seo_en',
                'neckname' => 'محتوى SEO بالانجليزية',
                'type' => 'textarea',
                'value' => 'We are the Society for Planning and Social Innovation, we offer the optimal consulting concept and the distinctive Saudi fingerprint in all our products and services'
            ],





            //------ ceo ---------//
            [
                'key'      => 'ceo_desc_ar',
                'neckname' => 'وصف كلمه المدير التنفيذى بالعربيه',
                'type'     => 'textarea',
                'value'    => "جمعية التخطيط والابتكار الاجتماعي جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار.جمعية التخطيط والابتكار الاجتماعي جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار.جمعية التخطيط والابتكار الاجتماعي جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار.جمعية التخطيط والابتكار الاجتماعي جمعية التخطيط والابتكار الاجتماعي هي جمعية أهلية حديثة التأسيس في المملكة العربية السعودية. تهدف إلى الارتقاء بالعمل التنموي والاجتماعي من خلال التخطيط والابتكار."
            ],

            [
                'key'      => 'ceo_desc_en',
                'neckname' => 'وصف كلمه المدير التنفيذى بالانجليزي',
                'type'     => 'textarea',
                'value'    => "Society for Planning and Social Innovation The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation. Society for Planning and Social Innovation The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation. Society for Planning and Social Innovation The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation. Society for Planning and Social Innovation The Society for Planning and Social Innovation is a newly established civil society association in the Kingdom of Saudi Arabia. It aims to advance development and social work through planning and innovation."
            ],

            [
                'key'      => 'ceo_name_ar',
                'neckname' => 'اسم المدير التنفيذى بالعربيه',
                'type'     => 'text',
                'value'    => "The Islamic application includes many features that a Muslim needs"
            ],
            [
                'key'      => 'ceo_name_en',
                'neckname' => 'اسم المدير التنفيذى بالانجليزي',
                'type'     => 'text',
                'value'    => "The Islamic application includes many features that a Muslim needs"
            ],

            [
                'key'      => 'ceo_neckname_ar',
                'neckname' => 'لقب المدير التنفيذى بالعربيه',
                'type'     => 'text',
                'value'    => "The Islamic application includes many features that a Muslim needs"
            ],

            [
                'key'      => 'ceo_neckname_en',
                'neckname' => 'لقب المدير التنفيذى بالانجليزي',
                'type'     => 'text',
                'value'    => "The Islamic application includes many features that a Muslim needs"
            ],

            [
                'key'      => 'ceo_photo',
                'neckname' => 'صوره المدير التنفيذى',
                'type'     => 'file',
                'value'    => "The Islamic application includes many features that a Muslim needs"
            ],

            //------ end ceo ---------//












            [
                'key'      => 'email',
                'neckname' => 'البريد الإلكترونى',
                'type'     => 'email',
                'value'    => 'info@retaam.com'
            ],
            [
                'key'      => 'phone',
                'neckname' => 'رقم الجوال',
                'type'     => 'tel',
                'value'    => '00966500000000'
            ],
            [
                'key'      => 'whatsapp',
                'neckname' => 'واتساب',
                'type'     => 'tel',
                'value'    => 'https://instagram.com'
            ],
            [
                'key'      => 'facebook',
                'neckname' => 'فيسبوك',
                'type'     => 'url',
                'value'    => 'https://facebook.com'
            ],
            [
                'key'      => 'twitter',
                'neckname' => 'تويتر',
                'type'     => 'url',
                'value'    => 'https://twitter.com'
            ],
            [
                'key'      => 'instagram',
                'neckname' => 'انستاجرام',
                'type'     => 'url',
                'value'    => 'https://instagram.com'
            ],

            [
                'key'      => 'snapchat',
                'neckname' => 'سناب شات',
                'type'     => 'url',
                'value'    => 'snapchat.com'
            ],

            [
                'key'      => 'website',
                'neckname' => 'الموقع الالكترونى',
                'type'     => 'url',
                'value'    => 'https://instagram.com'
            ],
            [
                'key'      => 'address',
                'neckname' => 'العنوان',
                'type'     => 'address',
                'value'    => 'رتام للحلول B1 مجمع تفاصل للأعمال، الرياض، المملكة العربية السعودية'
            ],
            [
                'key'      => 'lat',
                'neckname' => 'lat',
                'type'     => 'hidden',
                'value'    => '-33.8688'
            ],
            [
                'key'      => 'lng',
                'neckname' => 'lng',
                'type'     => 'hidden',
                'value'    => '151.2195'
            ],



        ]);
    }
}
