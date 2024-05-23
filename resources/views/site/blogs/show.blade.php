@extends('site.layouts.app')
@section('title', transWord('عن الجمعية'))

@title($blog->title)
@description(Str::limit($blog->desc, 160))
@keywords(implode(',', json_decode(getSetting('keyword', app()->getLocale()))))
@image($blog->image_path)
@section('class_header', 'header-pages')
@section('header')
    <div class="sub-header-pages">
        <div class="main-container">
            <div class="titel-pages">
                <h2>{{ transWord('اخر اخبارنا') }}</h2>
                <div class="text-pages">
                    <h6>
                        <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a>
                        <i class="bi bi-chevron-double-left"></i>
                        <a href="{{ route('site.blog.index') }}"> {{ transWord('اخر اخبارنا') }}</a>
                        <i class="bi bi-chevron-double-left"></i>
                        <span>{{ transWord('تفاصيل الخبر') }}</span>
                    </h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main id="app">
        <section class="blog-details mr-section">
            <div class="main-container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="main-blog-details">
                            <div class="img-blog-details">
                                <img src="{{ $blog->image_path }}" alt="">
                            </div>
                            <div class="text-blog-details">

                                <h2>{{ $blog->title }}<span>{{ $blog->created_at }}</span></h2>
                                <div class="tiping-blog">
                                    <p> {!! $blog->desc !!}</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="more-blogs">
                            <h2>{{ transWord('اخر الاخبار ') }}</h2>
                            <ul>
                                @forelse ($latest_blogs as $blogs)
                                    <li class="sub-more-blogs">
                                        <div class="img-more-blogs">
                                            <img src="{{ $blogs->image_path }}" alt="">
                                        </div>
                                        <div class="text-more-blogs">
                                            <h4>{{ $blogs->created_at }}</h4>
                                            <h2>{{ $blogs->title }}</h2>
                                            <p>
                                                {{ Str::limit($blogs->desc, 100) }}
                                                <span><a href="{{ route('site.blog.show', $blog->id) }}">{{ transWord('قراة المزيد') }}
                                                        <i class="bi bi-arrow-left"></i></a></span>
                                            </p>
                                        </div>
                                    </li>
                                @empty
                                    <div class="notFound">
                                        {{-- <img src="{{ asset('site/images/not.png') }}"> --}}
                                        <img src="{{ asset('site/images/not.png') }}">

                                        <h2>{{ transWord('لايوجد اعضاء مجلس الادارة في الوقت الحالي') }} </h2>
                                    </div>
                                @endforelse

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

@endsection
