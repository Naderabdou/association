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
                <h2>{{ transWord('مساراتنا') }}</h2>
                <div class="text-pages">
                    <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                            class="bi bi-chevron-double-left"></i>
                        {{ transWord('مساراتنا') }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <main>

        <section class="paths mr-section">
            <div class="main-container">
                <div class="row row-gap">
                    @forelse ($paths as $path )
                    <div class="col-lg-6">
                        <div class="sub-paths">
                            <div class="img-paths">
                                <img src="{{ $path->image_path }}" alt="">
                            </div>
                            <div class="text-paths">
                                <h2> {{ $path->name }}</h2>
                                <div class="text-detalis-paths">
                                    {{-- <ul>

                                        <li>مساعدة المنظمات على وضع خطط استراتيجية فعالة لتحقيق أهدافها. تقديم </li>
                                        <li>تقديم الاستشارات والتدريب في مجال التخطيط الاستراتيجي.</li>
                                        <li>إجراء البحوث والدراسات حول
                                            القضايا الاجتماعية والاقتصادية.</li>
                                    </ul> --}}

                                    {!! $path->desc !!}

                                </div>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse


                </div>
            </div>
        </section>


    </main>

@endsection
