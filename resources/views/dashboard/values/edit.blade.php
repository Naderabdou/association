@extends('dashboard.layouts.app')

@section('title', transWord('تعديل قيمه '))

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.ourValues.index') }}">{{ transWord('قيمنا') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="#">{{ transWord('تعديل قيمنا ') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">{{ transWord('تعديل القيمة ') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical" action="{{ route('admin.ourValues.update',$OurValue->id) }}"
                                        method="POST" enctype="multipart/form-data" id="UpdateOurValuesForm">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">

                                            <input type="hidden" name="id" value="{{ $OurValue->id }}" id="id">

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="title_ar">{{ transWord('الاسم بالعربي') }}</label>
                                                    <input type="text" id="title_ar" class="form-control"
                                                        name="title_ar" value="{{ old('title_ar',$OurValue->title_ar) }}" />
                                                    @error('title_ar')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="title_en">{{ transWord('الاسم بالإنجليزي') }}</label>
                                                    <input type="text" id="title_en" class="form-control"
                                                        name="title_en" value="{{ old('title_en',$OurValue->title_en) }}" />
                                                    @error('title_en')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="icon"
                                                        class="form-label">{{ transWord('الايقون') }}</label>
                                                    <input class="form-control image" type="file" id="icon"
                                                        name="icon" accept=".png, .jpg, .jpeg, .svg">
                                                    @error('icon')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group prev">
                                                    <img src="{{ $OurValue->icon_path }}" style="width: 100px"
                                                        class="img-thumbnail preview-icon" alt="">
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn btn-primary mr-1">{{ transWord('save') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Vertical form layout section end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    @push('js')
        <script src="{{ asset('dashboard/app-assets/js/custom/preview-image.js') }}"></script>

        <script src="{{ asset('dashboard/assets/js/custom/validation/ourValuesForm.js') }}"></script>
    @endpush
@endsection
