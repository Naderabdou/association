@extends('dashboard.layouts.app')

@section('title', transWord('تعديل لوئح وسياسات جديدة'))

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
                                            href="{{ route('admin.regulations.index') }}">{{ transWord('اللوائح والسياسات') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="#">{{ transWord('تعديل لوئح وسياسات جديدة') }}</a>
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
                                    <h2 class="card-title">{{ transWord('تعديل لوئح وسياسات جديدة') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical"
                                        action="{{ route('admin.regulations.update', $regulation->id) }}" method="POST"
                                        id="regulationsUpdateForm" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="category_id">{{ transWord('القسم التابع له') }}</label>
                                                    <select class=" form-control select2" id="category_id"
                                                        name="category_id">
                                                        <option value="">{{ transWord('اختر القسم التابع له') }}
                                                        </option>
                                                        @foreach ($categories as $category)
                                                            <option
                                                                {{ $regulation->category_id === $category->id ? 'selected' : '' }}
                                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name_ar">{{ transWord('الاسم بالعربي') }}</label>
                                                    <input type="text" id="name_ar" class="form-control"
                                                        name="name_ar" value="{{ old('name_ar',$regulation->name_ar) }}" />
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
                                                        name="name_en" value="{{ old('name_en',$regulation->name_en) }}" />
                                                    @error('name_en')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>






                                            {{-- <div class="col-12">
                                                <div class="form-group">
                                                    <label for="image"
                                                        class="form-label">{{ transWord('الصورة') }}</label>
                                                    <input class="form-control image" type="file" id="image"
                                                        name="image" accept=".png, .jpg, .jpeg , svg" >
                                                    @error('image')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group prev">
                                                    <img src="" style="width: 100px"
                                                        class="img-thumbnail preview-image" alt="">
                                                </div>
                                            </div> --}}

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="pdf"
                                                        class="form-label">{{ transWord('الملف') }}</label>
                                                    <input class="form-control pdf" type="file" id="pdf"
                                                        name="pdf" accept=".pdf">
                                                    @error('pdf')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <div class="form-group prev">
                                                    <object data="{{ $regulation->pdf_path }}" type="application/pdf"
                                                        style="width: 100%; height: 500px;" class="preview-pdf"></object>
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
        <script>
            $(document).ready(function() {
                $('.select2').select2();

                document.getElementById('pdf').addEventListener('change', function(e) {
                    var file = e.target.files[0];
                    var progressBar = document.querySelector('.progress-bar');


                    if (file) {
                        var objectUrl = URL.createObjectURL(file);
                        document.querySelector('.preview-pdf').setAttribute('data', objectUrl);
                    } else {
                        document.querySelector('.preview-pdf').setAttribute('data', '');
                    }
                });
            });
        </script>
        <script src="{{ asset('dashboard/app-assets/js/custom/preview-image.js') }}"></script>

        <script src="{{ asset('dashboard/assets/js/custom/validation/regulationsForm.js') }}"></script>
    @endpush
@endsection
