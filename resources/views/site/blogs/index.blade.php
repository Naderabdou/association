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
                <h2>{{ transWord('اخر اخبارنا') }}</h2>
                <div class="text-pages">
                    <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                            class="bi bi-chevron-double-left"></i>
                        {{ transWord('اخر اخبارنا') }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main>
        <section class="blog-page mr-section">
            <div class="main-container">
                <div class="row row-gap">
                    @forelse ($blogs as $blog)
                        <div class="col-lg-4">
                            <div class="sub-news">
                                <div class="img-news">
                                    <img src="{{ $blog->image_path }}" alt="">
                                </div>
                                <div class="text-news">
                                    <h4> {{ $blog->created_at }}</h4>
                                    <h3>{{ $blog->title }}</h3>
                                    <p>
                                        {{ Str::limit($blog->desc, 100) }}
                                        <span><a href="{{ route('site.blog.show',$blog->id) }}">{{ transWord('قراة المزيد') }} <i
                                                    class="bi bi-arrow-left"></i></a></span></p>
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
                    <div class="col-12">
                        {{$blogs->links('site.pagination.custom')}}
                    </div>


                </div>
            </div>
        </section>



    </main>

@endsection
