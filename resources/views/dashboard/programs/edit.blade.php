@extends('dashboard.layouts.app')

@section('title', transWord('تعديل برامجنا '))

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
                                            href="{{ route('admin.ourPrograms.index') }}">{{ transWord('برامجنا') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="#">{{ transWord('تعديل برامجنا ') }}</a>
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
                                    <h2 class="card-title">{{ transWord('تعديل برامجنا ') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical" action="{{ route('admin.ourPrograms.update',$Program->id) }}"
                                        method="POST" enctype="multipart/form-data" id="UpdateOurProgramsForm">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">


                                            <input type="hidden" name="id" value="{{ $Program->id }}" id="id">

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name_ar">{{ transWord('الاسم بالعربي') }}</label>
                                                    <input type="text" id="name_ar" class="form-control"
                                                        name="name_ar" value="{{ old('name_ar',$Program->name_ar) }}" />
                                                    @error('name_ar')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name_en">{{ transWord('الاسم بالإنجليزي') }}</label>
                                                    <input type="text" id="name_en" class="form-control"
                                                        name="name_en" value="{{ old('name_en',$Program->name_en) }}" />
                                                    @error('name_en')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="desc_ar">{{ transWord('الوصف بالعربي') }}</label>
                                                    <textarea class="form-control " name="desc_ar" rows="10">{{ old('desc_ar',$Program->desc_ar) }}</textarea>
                                                    @error('desc_ar')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="desc_en">{{ transWord('الوصف بالانجليزي') }}</label>
                                                    <textarea class="form-control " name="desc_en" rows="10">{{ old('desc_en',$Program->desc_en) }}</textarea>
                                                    @error('desc_en')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="image"
                                                        class="form-label">{{ transWord('الايقونه') }}</label>
                                                    <input class="form-control image" type="file" id="image"
                                                        name="image" accept=".png, .jpg, .jpeg, .svg">
                                                    @error('image')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group prev">
                                                    <img src="{{ $Program->image_path }}" style="width: 100px"
                                                        class="img-thumbnail preview-image" alt="">
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

        <script src="{{ asset('dashboard/assets/js/custom/validation/OurProgramsForm.js') }}"></script>
    @endpush
@endsection
