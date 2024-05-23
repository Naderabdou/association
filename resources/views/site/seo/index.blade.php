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
            <h2>{{ transWord('المدير التنفيذي') }}</h2>
            <div class="text-pages">
                <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i class="bi bi-chevron-double-left"></i>
                    {{ transWord('المدير التنفيذي ') }}</h6>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<main id="app">

    <section class="seo mr-section">
        <div class="main-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="img-seo" data-aos="fade-left"  data-aos-easing="linear"
                    data-aos-duration="700">
                        <div class="sub-img-seo">
                            <img src="{{ asset('storage/'. getSetting('ceo_photo')) }}" alt="">
                        </div>
                        <div class="title-seo">
                            <h2> {{ getSetting('ceo_name',app()->getLocale())  }}</h2>
                            <p>  {{ getSetting('ceo_neckname',app()->getLocale()) }} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="text-seo" data-aos="fade-right"  data-aos-easing="linear"
                    data-aos-duration="700">
                        <h2> {{ transWord('كلمة المدير التنفيذي لجمعية التاخطيط والابتكار الاجتماعي ') }}</h2>
                        <p>
                           {{ getSetting('ceo_desc', app()->getLocale()) }}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
