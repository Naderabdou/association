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
                <h2>{{ transWord('طلب التحاق ببرنامج الابتكار الاجتماعي') }}</h2>
                <div class="text-pages">
                    <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                            class="bi bi-chevron-double-left"></i>
                        {{ transWord('طلب التحاق برنامج التمكين') }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main id="app">


        <!-- start contact us ------->
        <section class="request-for-membership mr-section">
            <div class="main-container">
                <div class="titel-centerr">
                    <h2>{{ transWord('طلب التحاق برنامج التمكين') }}</h2>
                </div>
                <form action="{{ route('site.request.membership.store') }}" method="POST" id="requestMembership">
                    @csrf
                    <input type="hidden" name='type_program' value="empowerment_program">

                    <div class="form-request">
                        <div class="row row-gap">
                            <div class="col-lg-6">
                                <div class="input-request">
                                    <input type="text" name="name" id="name"
                                        placeholder="{{ transWord('الأسم الرباعي') }}">
                                    @error('name')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="input-request">
                                    <input type="number" min="0" name="phone" id="phone"
                                        placeholder="{{ transWord('رقم الجوال') }}">
                                    @error('phone')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="input-request">
                                    <input type="number" min="0" name="ID_number" id="ID_number"
                                        placeholder="{{ transWord('رقم الهوية') }}">
                                    @error('ID_number')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="input-request">
                                    <input type="text" onfocus="(this.type='date')" name="birth_date" id="birth_date"
                                        placeholder="{{ transWord('تاريخ الميلاد') }}">
                                    @error('birth_date')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="input-request">
                                    <input type="email" name="email" id="email"
                                        placeholder="{{ transWord('البريد الالكتروني') }}">
                                    @error('email')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="input-request">
                                    <input type="text" name="certificate" id="certificate"
                                        placeholder="{{ transWord('المؤهل') }}">
                                    @error('certificate')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="input-request">
                                    <input type="text" name="specialization" id="specialization"
                                        placeholder="{{ transWord('التخصص') }}">
                                    @error('specialization')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="input-request arrow-select">
                                    <select class="form-select form-control " id="type" name="type">
                                        <option value="">{{ transWord('اختر نوع العمل') }}</option>
                                        <option value="student">{{ transWord('طالب') }}</option>
                                        <option value="private_sector"> {{ transWord('موظف قطاع خاص') }} </option>
                                        <option value="government_sector"> {{ transWord('موظف قطاع حكومي') }}</option>

                                    </select>
                                    @error('type')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="input-request arrow-select">
                                    <select class="form-select form-control " id="membership_type" name="membership_type">
                                        <option value="">{{ transWord('اختر نوع العضويه') }}</option>

                                        <option value="affiliate">{{ transWord('منتسب') }}</option>
                                        <option value="innovative"> {{ transWord('مبتكر') }} </option>

                                    </select>
                                    @error('membership_type')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="input-request arrow-select">
                                    <select class="form-select form-control " id="social_security_beneficiary"
                                        name="social_security_beneficiary">
                                        <option value="">{{ transWord('هل تستفيد من التأمينات الاجتماعية') }}</option>
                                        <option value="yes">{{ transWord('نعم') }}</option>
                                        <option value="no"> {{ transWord('لا') }} </option>

                                    </select>
                                    @error('social_security_beneficiary')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                            </div>



                            <div class="buttom-membership">
                                <button type="submit">{{ transWord('Send') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- end contact us --------->









    </main>


@endsection
