@extends('site.layouts.app')
@section('title', transWord('عن الجمعية'))

@title(getSetting('seo_title', app()->getLocale()))
@description(Str::limit(getSetting('desc_seo', app()->getLocale()), 160))
@keywords(implode(',', json_decode(getSetting('keyword', app()->getLocale()))))
@image(asset('storage/' . getSetting('logo')))
@section('class_header', 'header-pages')
@section('header')
<div class="sub-header-pages">
    <div class="main-container">
        <div class="titel-pages">
            <h2>{{ transWord('عن الجمعية') }}</h2>
            <div class="text-pages">
                <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                        class="bi bi-chevron-double-left"></i>
                        {{ transWord('عن الجمعية ') }}</h6>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
    <main id="app">


        <section class="about-the-association mr-section">
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


        <section class="train-us mr-section">
            <div class="main-containerr">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="img-train-us" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">
                            <img src="{{ asset('storage/' . getSetting('home_about_image')) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
                        <div class="detalis-train-us">
                            <div class="titel-start-page bg-section">
                                <h2>{{ transWord('اسئلة مكررة') }}</h2>
                                <p>{{ transWord('إجابات سريعة على الأسئلة التي قد تكون لديك') }}</p>
                            </div>


                            @forelse ($questions as $question)
                                <div class="accordion">
                                    <ul>
                                        <li>
                                            <h3>
                                                {{ $question->question }}
                                                <span class="arrow">-</span>
                                            </h3>

                                            <p>
                                                {{ $question->answer }}
                                            </p>

                                        </li>
                                    </ul>
                                </div>

                            @empty
                                <div class="notFound">
                                    {{-- <img src="{{ asset('site/images/not.png') }}"> --}}
                                    <img src="{{ asset('site/images/not.png') }}">

                                    <h2>{{ transWord('لايوجد اسئلة في الوقت الحالي') }} </h2>
                                </div>
                            @endforelse






                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="rate-us mr-section">
            <div class="main-container">
                <div class="titel-centerrrr">
                    <h2>{{ transWord('قيمنا') }}</h2>
                    <p>
                        {{ getSetting('our_value', app()->getLocale()) }}
                    </p>
                </div>
                <div class="row align-items-center row-gap ">
                    @forelse ($values as $value)
                        <div class="col-lg-3">
                            <div class="sub-rate-us">
                                <div class="img-rate-us">
                                    <img src="{{ $value->icon_path }}" alt="">
                                </div>
                                <div class="text-img">
                                    <h2>{{ $value->title }}</h2>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="notFound">
                            {{-- <img src="{{ asset('site/images/not.png') }}"> --}}
                            <img src="{{ asset('site/images/not.png') }}">

                            <h2>{{ transWord('لايوجد قيم في الوقت الحالي') }} </h2>
                        </div>
                    @endforelse


                </div>
            </div>
        </section>


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
                            <img src="{{ asset('site/images/email.png') }}" alt="">
                            <input type="email" name="email" class="form-control"
                                placeholder=" {{ transWord('البريد الإلكتروني') }}" id="email">

                        </div>

                        <div class="btn-subscribe">
                            <button type="submit">{{ transWord('ارسال') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

@endsection
