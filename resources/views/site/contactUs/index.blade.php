@extends('site.layouts.app')
@section('title', transWord('عن الجمعية'))

@title(getSetting('seo_title', app()->getLocale()))
@description(Str::limit(getSetting('ceo_desc', app()->getLocale()), 160))
@keywords(implode(',', json_decode(getSetting('keyword', app()->getLocale()))))
@image(asset('storage/' . getSetting('ceo_photo')))
@section('class_header', 'header-pages')
@section('header')
    <div class="sub-header-pages">
        <div class="main-container">
            <div class="titel-pages">
                <h2>{{ transWord('تواصل معنا') }}</h2>
                <div class="text-pages">
                    <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                            class="bi bi-chevron-double-left"></i>
                        {{ transWord('تواصل معنا ') }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main id="app">
        <main id="app">

            <section class="contactus-page mr-section">
                <div class="main-container">
                    <div class="info-contactus">
                        <div class="row row-gap">
                            <div class="col-lg-4">

                                <a target="__blank" href="mailto::{{ getSetting('email') }}">
                                    <div class="sub-info-contact">
                                        <div class="img-info-contactus">
                                            <img src="{{ asset('site/images/c1.png') }}" alt="">
                                        </div>
                                        <div class="text-info-contact">
                                            <h2>{{ transWord('البريد الالكتروني') }}</h2>

                                            <p>{{ getSetting('email') }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a target="__blank"
                                    href="https://www.google.com/maps?q={{ getSetting('lat') }},{{ getSetting('lng') }}">
                                    <div class="sub-info-contact">
                                        <div class="img-info-contactus">
                                            <img src="{{ asset('site/images/c2.png') }}" alt="">
                                        </div>
                                        <div class="text-info-contact">
                                            <h2>{{ transWord('الموقع') }}</h2>
                                            <p>{{ transWord(getSetting('address'), app()->getLocale()) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a target="__blank" href="tel:{{ getSetting('phone') }}">
                                    <div class="sub-info-contact">
                                        <div class="img-info-contactus">
                                            <img src="{{ asset('site/images/c3.png') }}" alt="">
                                        </div>
                                        <div class="text-info-contact">
                                            <h2>{{ transWord('رقم الجوال') }}</h2>
                                            <p>{{ getSetting('phone') }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="main-contact-page mr-section">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="titel-start">
                                    <h2>{{ transWord('تواصل معنا') }}</h2>
                                    <p>{{ transWord('تواصل معنا إذا كنت تريد احدي خدماتنا') }}</p>
                                </div>
                                <form data-aos="fade-left" class="form" id="contact_form"
                                    action="{{ route('site.contact') }}" method="post">
                                    <div class="input">
                                        @csrf
                                        <div class="form-input">
                                            <input type="text" name="first_name" id="first_name"
                                                placeholder="{{ transWord('الاسم الاول') }} " class="form-control">
                                            @error('first_name')
                                                <span class="alert alert-danger">
                                                    <small class="errorTxt">{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-input">
                                            <input type="text" name="last_name" id="last_name"
                                                placeholder="{{ transWord('الاسم الثاني') }}" class="form-control">
                                            @error('last_name')
                                                <span class="alert alert-danger">
                                                    <small class="errorTxt">{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-input">
                                            <input type="email" name="email" id="email"
                                                placeholder="{{ transWord('البريد الالكتروني') }}" class="form-control">
                                            @error('email')
                                                <span class="alert alert-danger">
                                                    <small class="errorTxt">{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-input">
                                            <input type="tel" name="phone" id="phone"
                                                placeholder="{{ transWord('رقم الجوال') }}" class="form-control">
                                            @error('phone')
                                                <span class="alert alert-danger">
                                                    <small class="errorTxt">{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-input w-100">
                                            <textarea name="message" id="message" placeholder="{{ transWord('ادخل رسالتك هنا') }}" class="form-control"></textarea>
                                            @error('message')
                                                <span class="alert alert-danger">
                                                    <small class="errorTxt">{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="btn-about">
                                        <button href="">{{ transWord('ارسال') }}</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <div id="map" style="height: 500px; border-radius: 15px"
                                    data-address="{{ getSetting('address') }}"></div>

                                <input type="hidden" name="lat" value="{{ getSetting('lat')}}">
                                <input type="hidden" name="lng" value="{{ getSetting('lng') }}">

                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </main>




    </main>



@endsection
