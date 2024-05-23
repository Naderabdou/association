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
                <h2>{{ transWord('اللوائح والسياسات') }}</h2>
                <div class="text-pages">
                    <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                            class="bi bi-chevron-double-left"></i>
                        {{ transWord('اللوائح والسياسات') }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')



    <main id="app">






        <section class="regulations mr-section">
            <div class="main-container">
                @forelse ($regulationsCategory as $category)
                    <div class="sub-regulations">
                        <h2> {{ $category->name }} / {{ transWord('عددها') }} {{ $category->regulations_count }} <i
                                class="bi bi-chevron-down"></i></h2>
                        <ul>
                            @foreach ($category->regulations as $regulation)
                                <li>
                                    <a id="downloadPdf" target="_blank" href="{{ $regulation->pdf_path }}">
                                        <h2>
                                            <img src="{{ asset('site/images/flie.svg') }}"
                                                alt="">{{ $regulation->name }}
                                        </h2>
                                        <i class="bi bi-download"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @empty
                    <div class="notFound">
                        {{-- <img src="{{ asset('site/images/not.png') }}"> --}}
                        <img src="{{ asset('site/images/not.png') }}">

                        <h2>{{ transWord('لايوجد برامج في الوقت الحالي') }} </h2>
                    </div>
                @endforelse


            </div>
        </section>








    </main>

@endsection
@push('js')
    <script>
        $(document).ready(function() {
           

            $('#downloadPdf').on('click', function(e) {
                e.preventDefault();

                var href = $(this).attr('href');

                $.ajax({
                    url: href,
                    method: 'GET',
                    xhrFields: {
                        responseType: 'blob'
                    },
                    success: function(data) {
                        var a = document.createElement('a');
                        var url = window.URL.createObjectURL(data);
                        a.href = url;
                        a.download = '{{ $regulation->name }}'; // or any other extension
                        document.body.append(a);
                        a.click();
                        a.remove();
                        window.URL.revokeObjectURL(url);
                    }
                });
            });
        });
    </script>
@endpush
