<footer class="footer">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-5">
                <div class="sub-footer">
                    <div class="logo-footer">
                        <a href="index.html">
                            <img src="{{ asset('storage/' . getSetting('footer_logo')) }}" alt="">
                        </a>
                    </div>
                    <p>
                        {{ getSetting('footer_desc', app()->getLocale()) }}
                    </p>
                    <div class="sco-media">
                        <ul>
                            <li><a href="{{ getSetting('whatsapp') }}"><i class="bi bi-whatsapp"></i></a></li>
                            <li><a href="{{ getSetting('twitter')}}"><i class="bi bi-twitter-x"></i></a></li>
                            <li><a href="{{ getSetting('instagram')}}"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="{{ getSetting('facebook')}}"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="{{ getSetting('facebook')}}"><i class="bi bi-snapchat"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-2">
                <div class="element-footer">
                    <h2>{{ transWord('روابط مهمة') }}</h2>
                    <ul>
                        <li><a href="{{ route('site.aboutUs') }}">{{ transWord('عن الجمعية') }}</a></li>
                        <li><a href="{{ route('site.programs') }}">{{ transWord('برامجنا') }}</a></li>
                        <li><a href="{{ route('site.regulations') }}">{{ transWord('اللوائح والسياسات') }}</a></li>
                        <li><a href="{{ route('site.regulations') }}">{{ transWord('اعضاء مجلس الادراة') }}</a></li>
                        <li><a href="{{ route('site.contactUs') }}">{{ transWord('تواصل معنا') }}</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="element-footer">
                    <h2>{{ transWord('روابط مهمة') }}</h2>
                    <ul>
                        <li><a href="{{ route('site.partners') }}">{{ transWord('شركاؤنا') }}</a></li>
                        <li><a href="{{ route('site.programs') }}">{{ transWord('برامجنا') }}</a></li>
                        <li><a href="">{{ transWord('انجازاتنا') }}</a></li>
                        <li><a href="{{ route('site.partners') }}">{{ transWord('مساراتنا') }}</a></li>
                        <li><a href="">{{ transWord('التقارير') }}</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="contect-footer ">
                    <h2>{{ transWord('بيانات التواصل') }}</h2>
                    <ul>
                        <li>
                            <div class="img-des">
                                <img src="{{ asset('site/images/email.png') }}" alt="">
                            </div>
                            <div class="name">
                                <h4>{{ transWord('البريد الالكتروني') }}</h4>
                                <a target="__blank"
                                    href="mailto::{{ getSetting('email') }}">{{ getSetting('email') }}</a>
                            </div>
                        </li>


                        <li>
                            <div class="img-des">
                                <img src="{{ asset('site/images/location.png') }}" alt="">
                            </div>
                            <div class="name">
                                <h4>{{ transWord('الموقع') }}</h4>
                                <a target="__blank"
                                    href="https://www.google.com/maps?q={{ getSetting('lat') }},{{ getSetting('lng') }}">{{ transWord(getSetting('address'), app()->getLocale()) }}</a>
                            </div>
                        </li>

                        <li>
                            <div class="img-des">
                                <img src="{{ asset('site/images/phone.png') }}" alt="">
                            </div>
                            <div class="name">
                                <h4>{{ transWord('رقم الجوال ') }}</h4>
                                <a href="tel:{{ getSetting('phone') }}">{{ getSetting('phone') }}</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="end-page">
            <p>
                {{ __('كل الحقوق محفوظة') }} {{ getSetting('name_website', app()->getLocale()) }} &copy;
                {{ date('Y') }}
            </p>
            <a href="https://jaadara.com/"> {{ transWord('صنع بكل حب ') }}<i class="bi bi-heart-fill"></i>
                {{ transWord('في معامل جدارة ') }}</a>
        </div>
    </div>
</footer>



</div>


@include('site.layouts.script')





</body>
<!-- end-body
    =================== -->

</html>
