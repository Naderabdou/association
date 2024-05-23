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
                <h2>{{ transWord('لجاننا') }}</h2>
                <div class="text-pages">
                    <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                            class="bi bi-chevron-double-left"></i>
                        {{ transWord('لجاننا') }} </h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main id="app">


        <section class="commitees-page ">
            <div class="main-container">
                @forelse ($committees as $category )
                <div class="main-commitees-page mr-section">
                    <div class="titel-centerer">
                        <h2>{{ $category->name }}</h2>
                    </div>
                    <div class="owl-carousel owl-theme slider-commitees">
                        @foreach ( $category->committees as $members )
                        <div class="item">
                            <div class="sub-members">
                                <div class="img-members">
                                    <img src="{{ $members->image_path }}" alt="">
                                </div>
                                <div class="text-member">
                                    <h2>{{ $members->job_title }}</h2>
                                    <p>{{ $members->name }}</p>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>

                </div>
                @empty

                @endforelse


            </div>
        </section>















    </main>

@endsection
