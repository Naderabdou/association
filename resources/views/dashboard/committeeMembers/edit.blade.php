@extends('dashboard.layouts.app')

@section('title', transWord('تعديل اعضاء اللجنه'))

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
                                            href="{{ route('admin.committeeMembers.index') }}">{{ transWord('اعضاء اللجان') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ transWord('تعديل عضو اللجنه ') }}</a>
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
                                    <h2 class="card-title">{{ transWord('تعديل عضو اللجنه ') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical"
                                        action="{{ route('admin.committeeMembers.update',$committeeMember->id) }}" method="POST" id="DirectorsUpdateForm"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="category_id">{{ transWord('القسم التابع له') }}</label>
                                                    <select class=" form-control select2" id="category_id" name="category_id">
                                                        <option value="">{{ transWord('اختر القسم التابع له') }}</option>
                                                        @foreach ($categories as $category)
                                                            <option {{ $committeeMember->category_id === $category->id ? 'selected' : '' }}  value="{{ $category->id }}">{{ $category->name }}</option>
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
                                                    <label for="name_ar">{{ transWord('الأسم بالعربية') }}</label>
                                                    <input type="text" id="name_ar" class="form-control" name="name_ar"
                                                        value="{{ old('name_ar',$committeeMember->name_ar) }}" />
                                                    @error('name_ar')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name_en">{{ transWord('الأسم بالإنجليزية') }}</label>
                                                    <input type="text" id="name_en" class="form-control" name="name_en"
                                                        value="{{ old('name_en',$committeeMember->name_en) }}" />
                                                    @error('name_en')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="job_title_ar">{{ transWord('اللقب بالعربي') }}</label>
                                                    <input type="text" id="job_title_ar" class="form-control" name="job_title_ar"
                                                        value="{{ old('job_title_ar',$committeeMember->job_title_ar) }}" />
                                                    @error('job_title_ar')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="job_title_en">{{ transWord('اللقب بالإنجليزية') }}</label>
                                                    <input type="text" id="name_en" class="form-control" name="job_title_en"
                                                        value="{{ old('job_title_en',$committeeMember->job_title_en) }}" />
                                                    @error('job_title_en')
                                                        <span class="alert alert-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-12">
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
                                                    <img src="{{ $committeeMember->image_path }}" style="width: 100px"
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
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script src="{{ asset('dashboard/app-assets/js/custom/preview-image.js') }}"></script>

    <script src="{{ asset('dashboard/assets/js/custom/validation/directorsForm.js') }}"></script>
    @endpush
@endsection
