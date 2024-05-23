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
                <h2>{{ transWord('أعضاء مجلس الإدارة') }}</h2>
                <div class="text-pages">
                    <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                            class="bi bi-chevron-double-left"></i>
                        {{ transWord('أعضاء مجلس الإدارة') }} </h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main id="app">
        <section class="members mr-section">
            <div class="main-container">
                <div class="titel-centerr">
                    <h2>{{ transWord('اعضاء مجلس الادارة') }}</h2>
                </div>
                <div class="row row-gap">
                    @forelse ($directors as $director)

                    <div class="col-lg-4 col-md-6 ">
                        <div class="sub-members">
                            <div class="img-members">
                                <img src="{{ $director->image_path }}" alt="">
                            </div>
                            <div class="text-member">
                                <h2>{{ $director->job_title }}</h2>

                                <p>
                                     {{ $director->name }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="notFound">
                        {{-- <img src="{{ asset('site/images/not.png') }}"> --}}
                        <img src="{{ asset('site/images/not.png') }}">

                        <h2>{{ transWord('لايوجد اعضاء مجلس الادارة في الوقت الحالي') }} </h2>
                    </div>
                    @endforelse

                </div>
            </div>
        </section>



















    </main>

@endsection
