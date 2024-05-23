@extends('site.layouts.app')
@section('title', transWord('Home'))

@title(getSetting('seo_title', app()->getLocale()))
@description(Str::limit(getSetting('desc_seo', app()->getLocale()), 160))
@keywords(implode(',', json_decode(getSetting('keyword', app()->getLocale()))))
@image(asset('storage/' . getSetting('logo')))
@section('class_header', 'header')
@section('header')
<div class="sub-header" style="background-image: url({{ asset('storage/'.getSetting('slider_image')) }});">
    <div class="main-container">
        <div data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="700" class="text-header">
            <h1>{{ getSetting('name_website', app()->getLocale()) }}</h1>
            <h2>
             {!! getSetting('slider_desc', app()->getLocale()) !!}
            </h2>
            <a data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="700" href=""
                class="ctm-btn-w">{{  transWord('اعرف المزيد') }}</a>
        </div>
    </div>
</div>
@endsection
@section('content')
    <main id="app">
        <!-- start about header  -->
        <section class="about-header mr-section">
            <div class="main-container">
                <div class="row align-items-center row-gap">
                    <div class="col-lg-3 col-md-6">
                        <div data-aos="fade-up" class="sub-about-header">
                            <div class="img-sub-about-header">
                                <img src="{{ asset('site/images/11.png') }}" alt="">
                            </div>
                            <div class="text-about-header">
                                <h2>{{ transWord('رؤيتنا') }}</h2>
                                <p>
                                    {!! getSetting('our_vision', app()->getLocale()) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div data-aos="fade-up" class="sub-about-header">
                            <div class="img-sub-about-header">
                                <img src="{{ asset('site/images/22.png') }}" alt="">
                            </div>
                            <div class="text-about-header">
                                <h2>{{ transword('رسالتنا') }}</h2>
                                <p>
                                    {!! getSetting('our_message', app()->getLocale()) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div data-aos="fade-up" class="sub-about-header">
                            <div class="img-sub-about-header">
                                <img src="{{ asset('site/images/33.png') }}" alt="">
                            </div>
                            <div class="text-about-header">
                                <h2>{{ transWord('أهدافنا') }}</h2>
                                <p>
                                    {!! getSetting('our_goals', app()->getLocale()) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div data-aos="fade-up" class="sub-about-header">
                            <div class="img-sub-about-header">
                                <img src="{{ asset('site/images/Frame.png') }}" alt="">
                            </div>
                            <div class="text-about-header">
                                <h2>{{ transWord('منهجيتنا') }}</h2>
                                <p>
                                    {{ getSetting('our_methodology', app()->getLocale()) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about header -->



        <!-- start about us -->
        <section class="about-the-association">
            <div class="main-container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div data-aos="fade-left" class="text-about">
                            <div class="titel-start">
                                <h2>{{ transWord('عن الجمعية') }}</h2>
                            </div>
                            <div class="p-about">
                                <p>

                                    {{ getSetting('home_about_desc', app()->getLocale()) }}
                                </p>
                                @php
                                    $features = json_decode(getSetting('home_about_feature', app()->getLocale()));
                                @endphp
                                <ul>

                                    @if (!is_null($features))
                                        @foreach ($features as $feature)
                                            <li>{{ $feature }}</li>
                                        @endforeach
                                    @else
                                        <li>{{ transWord('No features available') }}</li>
                                    @endif

                                </ul>
                            </div>
                            <div class="association-numbers">
                                <button> <span><i
                                            class="bi bi-plus"></i>{{ getSetting('home_about_training_programs') }}</span>
                                    {{ transWord('برامج تدريبية') }} </button>
                                <button> <span><i
                                            class="bi bi-plus"></i>{{ getSetting('home_about_Youth_initiative') }}</span>
                                    {{ transWord('مبادرة شبابية') }} </button>
                            </div>
                            <div class="btn-about">
                                <button href="">{{ transWord('اعرف المزيد') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div data-aos="fade-right" class="img-about">
                            <img src="{{ asset('storage/' . getSetting('home_about_image')) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about us -->



        <!-- start our programs -->
        <section class="our-programs mr-section br-section ">
            <div class="main-container">
                <div class="titel-center color">
                    <h2 class="color">{{ transWord('برامجنا') }}</h2>
                    <p class="color">
                        {{ getSetting('programing', app()->getLocale()) }}
                    </p>
                </div>
                <div class="sub-programs">


                    <div class="row">
                        @forelse ($programing as $program)
                            <div class="col-lg-6">
                                <div data-aos="flip-right" data-aos-easing="linear" data-aos-duration="700"
                                    class="detalis">
                                    <div class="img-detalis">
                                        <img src="{{ $program->image_path }}" alt="">
                                    </div>
                                    <div class="text-detalis">
                                        <h2>{{ $program->name }}</h2>
                                        <p>
                                            {{ Str::limit($program->desc, 200, '...') }}

                                            {{-- {{ $program->desc }} --}}
                                        </p>
                                    </div>
                                    <div class="btn-detalis">
                                        <a href="">{{ transWord('طلب التحاق بالبرنامج') }}</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="notFound">
                                {{-- <img src="{{ asset('site/images/not.png') }}"> --}}
                                <img src="{{ asset('site/images/not.png') }}">

                                <h2>{{ transWord('لايوجد برامج في الوقت الحالي') }} </h2>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </section>
        <!-- end our programs -->




        <!-- start news -->
        <section class="our-news mr-section br-section">
            <div class="main-container">
                <div class="selider-news">
                    <div class="titel-centerr">
                        <h2>{{ transWord('اخر اخبارنا') }}</h2>
                    </div>

                    <div class="owl-carousel owl-theme" id="slider-3">
                        @forelse ($blogs as $blog)
                            <div class="item">
                                <div class="sub-news">
                                    <div class="img-news">
                                        <img src="{{ $blog->image_path }}" alt="">
                                    </div>
                                    <div class="text-news">
                                        <h4> {{ $blog->created_at }}</h4>
                                        <h3>{{ $blog->title }}</h3>
                                        <p>
                                            {{ Str::limit($blog->desc, 100, '...') }}
                                            <span>
                                                <a href="blog-details.html">{{ transWord('قراة المزيد ') }}
                                                    <i class="bi bi-arrow-left"></i>
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="notFound">
                                {{-- <img src="{{ asset('site/images/not.png') }}"> --}}
                                <img src="{{ asset('site/images/not.png') }}">

                                <h2>{{ transWord('لايوجد اخبار في الوقت الحالي') }} </h2>
                            </div>
                        @endforelse

                    </div>




                </div>
            </div>
        </section>
        <!-- end news -->




        <!-- start our partners ------->
        <section class="our-partners mr-section">
            <div class="main-container">
                <div class="titel-centerr">
                    <h2>{{ transWord('شركائنا') }} </h2>
                </div>

                <div class="owl-carousel owl-theme" id="slider-partners">
                    @forelse ($partners as $partner)
                        <div class="item">
                            <div class="sub-our-partners">
                                <img src="{{ $partner->image_path }}" alt="">
                            </div>
                        </div>
                    @empty
                        <div class="notFound">
                            {{-- <img src="{{ asset('site/images/not.png') }}"> --}}
                            <img src="{{ asset('site/images/not.png') }}">

                            <h2>{{ transWord('لايوجد شركاء في الوقت الحالي') }} </h2>
                        </div>
                    @endforelse


                </div>
            </div>
        </section>
        <!-- end our partners ------->




        <!-- start contact us ------->
        <section class="contact-us br-section">
            <div class="main-container">
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
                                    <input type="text" name="first_name" id="first_name" placeholder="{{ transWord('الاسم الاول') }} "
                                        class="form-control">
                                    @error('first_name')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-input">
                                    <input type="text" name="last_name" id="last_name" placeholder="{{ transWord('الاسم الثاني') }}"
                                        class="form-control">
                                    @error('last_name')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-input">
                                    <input type="email" name="email" id="email" placeholder="{{ transWord('البريد الالكتروني') }}"
                                        class="form-control">
                                    @error('email')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-input">
                                    <input type="tel" name="phone" id="phone" placeholder="{{ transWord('رقم الجوال') }}"
                                        class="form-control">
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
                        <div data-aos="fade-right" class="sub-contact-us">
                            <div class="titel-startt">
                                <h2>{{ transWord('بيانات التواصل') }}</h2>
                            </div>
                            <div class="detalis-contact">
                                <div class="img-contact">
                                    <img src={{  asset('site/images/email.png') }}" alt="">
                                </div>
                                <div class="text-contact">
                                    <h3>{{ transWord('البريد الالكتروني') }}</h3>
                                    <a target="__blank"
                                        href="mailto::{{ getSetting('email') }}">{{ getSetting('email') }}</a>
                                </div>
                            </div>
                            <div class="detalis-contact">
                                <div class="img-contact">
                                    <img src="{{ asset('site/images/location.png') }}" alt="">
                                </div>
                                <div class="text-contact">
                                    <h3>{{ transWord('العنوان') }}</h3>
                                    <a target="__blank"
                                        href="https://www.google.com/maps?q={{ getSetting('lat') }},{{ getSetting('lng') }}">{{ transWord(getSetting('address'), app()->getLocale()) }}</a>
                                </div>
                            </div>
                            <div class="detalis-contact">
                                <div class="img-contact">
                                    <img src="{{ asset('site/images/phone.png') }}" alt="">
                                </div>
                                <div class="text-contact">
                                    <h3>{{ transWord('رقم الجوال') }}</h3>
                                    <a target="__blank" href="tel:{{ getSetting('phone') }}">{{ getSetting('phone') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact us --------->



        <!-- start-subcribe ---------->
        <section class="subscribe br-section ">
            <div class="main-container">
                <div class="titel-centerer">
                    <h2>{{ transWord('اشترك في القائمة البريدية') }}</h2>
                    <p>{{ transWord('اشترك معنا بالبريد الإلكتروني ليصلك منا كل ماهو جديد') }}</p>
                </div>
                <form action="{{ route('site.subscribe') }}" id="subscribe" method="post">
                    @csrf
                    <div class="form-row form-subscribe d-flex justify-content-center align-items-center">
                        <div class="input-subscribe">
                            <img src="{{ asset('site/images/mail.png') }}" alt="">
                            <input type="email" name="email" class="form-control" placeholder=" {{ transWord('البريد الإلكتروني') }}">
                            @error('email')
                            <span class="alert alert-danger">
                                <small class="errorTxt">{{ $message }}</small>
                            </span>
                        @enderror

                        </div>


                        <div class="btn-subscribe">
                            <button type="submit">{{ transWord('ارسال') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- end-subcribe ---------->
    </main>
@endsection

@push('css')
    <style>
        .img-about::before {
            background-image: url({{ asset('storage/' . getSetting('home_about_icon')) }})
        }

        .sub-contact-us {
            background-image: url({{ asset('storage/' . getSetting('home_contact_image')) }})
        }
    </style>
@endpush
