<header class="@yield('class_header')">
    <div class="main-container">
        <div class="top-par">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('storage/' . getSetting('logo')) }}" alt=""></a>
            </div>
            <!-- start-element -->
            <div class="element">
                <div class="logo-menu">
                    <img src="{{ asset('storage/' . getSetting('logo')) }}" alt="">
                </div>
                <ul>
                    <li>
                        <a class="active" href="{{ route('site.home') }}">{{ transWord('الرئيسية') }}</a>
                    </li>
                    <li>
                        <a class="click-element" href="{{ route('site.aboutUs') }}"> {{ transWord('عن الجمعية') }}<i
                                class="bi bi-caret-down-fill"></i></a>
                        <div class="dropdowm-element">
                            <ul>
                                <li>
                                    <a href="{{ route('site.aboutUs') }}">{{ transWord('عن الجمعية') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('site.seo') }}">{{ transWord('المدير التنفيذي') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('site.members') }}">{{ transWord('أعضاء مجلس الادراة') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('site.committees') }}">{{ transWord('لجاننا') }}</a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li>
                        <a href="" class="click-element1"> {{ transWord('برامجنا') }} <i
                                class="bi bi-caret-down-fill"></i></a>
                        <div class="dropdowm-element">
                            <ul>
                                <li><a href="{{ route('site.programs') }}">{{ transWord('برامجنا') }}</a></li>
                                <li><a href="{{ route('site.paths') }}">{{ transWord('مساراتنا') }}</a></li>

                            </ul>
                        </div>

                    </li>
                    <li>
                        <a href="{{ route('site.regulations') }}">{{ transWord('اللوائح والسياسات') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('site.blog.index') }}">{{ transWord('اخر اخبارنا') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('site.partners') }}">{{ transWord('شركاؤنا') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('site.contactUs') }}">{{ transWord('تواصل معنا') }}</a>
                    </li>
                    <li>
                        <a
                            href="{{ route('site.lang', app()->getLocale() == 'ar' ? 'en' : 'ar') }}">{{ app()->getLocale() === 'ar' ? transWord('العربيه') : transWord('الانجليزية') }}</a>
                    </li>
                </ul>
                <div class="btns">
                    <a href="{{ route('site.request.membership') }}" class="ctm-btn-str "> <i class="bi bi-person"></i>
                        {{ transWord('طلب الحصول علي عضوية ') }}</a>

                </div>
            </div>




            <div class="btns-top-par">

                <a href="{{ route('site.request.membership') }}" class="ctm-btn-str"> <svg width="20" height="20" viewBox="0 0 28 28"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_110_3173)">
                            <path
                                d="M6.6592 28C6.33313 27.9309 6.00159 27.8817 5.68235 27.7894C3.69924 27.2159 2.45647 25.6915 2.36965 23.6106C2.27942 21.4511 2.51526 19.3224 3.33694 17.3004C3.86741 15.9947 4.63645 14.8661 5.92639 14.1757C6.7221 13.7498 7.5759 13.5488 8.46799 13.5659C8.74963 13.5714 9.04563 13.7135 9.30266 13.8537C9.71692 14.0786 10.1004 14.3589 10.5024 14.607C12.8396 16.0508 15.1781 16.0487 17.5133 14.6022C17.838 14.4012 18.1689 14.2071 18.4731 13.9788C19.0322 13.5597 19.6468 13.5078 20.3113 13.6049C22.1235 13.8715 23.4038 14.864 24.2672 16.4479C25.0376 17.8616 25.3849 19.3976 25.5387 20.9801C25.618 21.7929 25.6556 22.6133 25.6453 23.4295C25.6159 25.8672 23.9432 27.6814 21.5178 27.9487C21.4576 27.9555 21.3995 27.9822 21.3401 28C16.4476 28 11.5531 28 6.6592 28ZM14.0024 26.3628C14.0024 26.3614 14.0024 26.36 14.0024 26.3587C16.3122 26.3587 18.6228 26.3792 20.9326 26.3525C22.8522 26.3306 24.0307 25.1063 24.015 23.1888C24.0088 22.4622 23.9794 21.7328 23.8994 21.0109C23.7545 19.7148 23.4859 18.4467 22.8576 17.2819C22.2062 16.074 21.2621 15.292 19.8403 15.214C19.7145 15.2072 19.5696 15.2434 19.4609 15.307C19.1088 15.5141 18.7711 15.7459 18.4245 15.9633C15.8419 17.5827 13.1677 17.7878 10.4176 16.4349C9.77639 16.1198 9.19123 15.6919 8.57737 15.3207C8.48713 15.266 8.37913 15.199 8.28274 15.2031C7.39954 15.2427 6.60725 15.5203 5.97288 16.1588C5.44583 16.6892 5.07805 17.3263 4.8094 18.0175C4.12307 19.7859 3.95764 21.6378 4.00276 23.5101C4.02737 24.5335 4.46965 25.3702 5.37815 25.9075C5.98381 26.265 6.65442 26.3621 7.34553 26.3614C9.56379 26.3621 11.7834 26.3628 14.0024 26.3628Z"
                                fill="white" />
                            <path
                                d="M20.5611 6.77919C20.5727 10.4918 17.5875 13.4852 13.8414 13.5174C10.1486 13.5488 7.11689 10.5314 7.09775 6.80516C7.07861 3.07753 10.0939 0.0539922 13.8298 0.0553594C17.5574 0.0560429 20.5495 3.0454 20.5611 6.77919ZM13.8284 11.8802C16.653 11.8822 18.9212 9.61473 18.9239 6.78671C18.9273 3.96073 16.6599 1.69393 13.8305 1.69257C11.0004 1.6912 8.73632 3.95389 8.73564 6.78466C8.73427 9.612 10.9997 11.8781 13.8284 11.8802Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_110_3173">
                                <rect width="28" height="28" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    {{ transWord('طلب الحصول علي عضوية ') }}</a>



            </div>

            <div class="bg-div-mune"></div>
            <div class="menu">
                <div class="hambergerIcon">
                </div>
            </div>




        </div>
    </div>





    @yield('header')



</header>

@push('css')
@endpush
