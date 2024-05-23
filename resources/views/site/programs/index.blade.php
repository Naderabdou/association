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
                <h2>{{ transWord('برامجنا') }}</h2>
                <div class="text-pages">
                    <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                            class="bi bi-chevron-double-left"></i>
                        {{ transWord('برامجنا') }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main id="app">


        <div class="programs mr-section">
            <div class="main-container">
                <div class="titel-centerer">
                    <h2>{{ transWord('برامجنا') }} </h2>
                </div>
                <div class="row row-gap">
                    @forelse ($programs as $program )
                    <div class="col-lg-6">
                        <div data-aos="flip-right" data-aos-easing="linear" data-aos-duration="700" class="detalis">
                            <div class="img-detalis">
                                <img src="{{ $program->image_path }}" alt="">
                            </div>
                            <div class="text-detalis">
                                <h2>{{ $program->name }}</h2>
                                <p>
                                    {{ $program->desc }}
                                </p>
                            </div>
                            <div class="btn-detalis">
                                <a href="{{ route('site.request.program',$program->id) }}">{{ transWord('طلب التحاق بالبرنامج') }}</a>
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


































    </main>

@endsection
