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
            <h2>{{ transWord('شركاؤنا') }}</h2>
            <div class="text-pages">
                <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i class="bi bi-chevron-double-left"></i>
                    {{ transWord('شركاؤنا') }} </h6>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')

<main id="app">


    <!-- start our partners ------->
    <section class="our-partners mr-section">
        <div class="main-container">
            <div class="titel-centerr">
                <h2>{{ transWord('شركائنا') }} </h2>
            </div>

            <div class="row row-gap">
                @forelse ($partners as $partner )
                <div class="col-lg-2">
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
                <div class="col-12">
                    {{$partners->links('site.pagination.custom')}}
                </div>





            </div>
        </div>
    </section>
    <!-- end our partners ------->


</main>

@endsection
