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
                <h2>{{ $program->slug == 'social-innovation-programme' ? transWord('طلب التحاق ببرنامج الابتكار الاجتماعي') : transWord('طلب التحاق برنامج التمكين') }}
                </h2>
                <div class="text-pages">
                    <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                            class="bi bi-chevron-double-left"></i>
                        {{ $program->slug == 'social-innovation-programme' ? transWord('طلب التحاق ببرنامج الابتكار الاجتماعي') : transWord('طلب التحاق برنامج التمكين') }}
                    </h6>
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
                    <h2>{{ $program->slug == 'social-innovation-programme' ? transWord('طلب التحاق ببرنامج الابتكار الاجتماعي') : transWord('طلب التحاق برنامج التمكين') }}
                    </h2>
                </div>
                <form action="{{ route('site.request.program.store') }}" method="POST" id="requestProgram">
                    @csrf
                    <div class="form-request">
                        <input type="hidden" name='type_program' value="Social_innovation_program">
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
                                        <option value="">{{ transWord('هل تستفيد من التأمينات الاجتماعية') }}
                                        </option>

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
                            @if ($program->slug == 'social-innovation-programme')
                                <div class="input-check">
                                    <input type="checkbox" id="remember_me" name="remember_me" required>
                                    <label for="remember_me"> {{ transWord('الموافقة علي شروط') }} <span
                                            class="blue">{{ transWord('اتفاقية الابتكار ') }}</span> </label>
                                    @error('remember_me')
                                        <span class="alert alert-danger">
                                            <small class="errorTxt">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                            @endif



                            <div class="buttom-membership">
                                <button type="submit" id='program_btn'>{{ transWord('Send') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- end contact us --------->









    </main>


@endsection
@push('css')
    <style>
        .input-check input:checked~label::before {
            background-image: url("{{ asset('site/images/arrow-down.png') }}");
        }
    </style>
@endpush
@push('js')
    <script>
        $(document).ready(function() {
            console.log('ready');
            $.validator.addMethod("domain", function(value, element) {
                // Allow emails from gmail.com, yahoo.com, hotmail.com, and outlook.com
                return this.optional(element) ||
                    /^[\w.-]+@(gmail\.com|yahoo\.com|hotmail\.com|outlook\.com)$/.test(value);
            }, window.emailmessage);
            $.validator.addMethod("phone_type", function(value, element) {
                return this.optional(element) || /^[0-9+]+$/.test(value);
            }, window.phoneMessage);



            $("#requestProgram").validate({


                rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        noSpecialChars: true
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 15,
                        phone_type: true,

                    },
                    ID_number: {
                        required: true,
                        minlength: 10,
                        maxlength: 15,
                        phone_type: true,

                    },

                    birth_date: {
                        required: true,
                    },

                    certificate: {
                        required: true,
                        minlength: 3,
                        noSpecialChars: true
                    },

                    specialization: {
                        required: true,
                        minlength: 3,
                        noSpecialChars: true
                    },
                    type: {
                        required: true,
                    },

                    membership_type: {
                        required: true,
                    },






                    email: {
                        required: true,
                        minlength: 3,
                        domain: true,

                    },

                    social_security_beneficiary: {
                        required: true,
                    },
                    remember_me: {
                        required: true,
                    },






                    // Add more fields as needed
                },

                messages: {

                    phone: {
                        minlength: window.phoneMinLengthMessage,
                        maxlength: window.phoneMaxLengthMessage,
                    },
                    payment_receipt: {
                        accept: window.avatarMessage
                    },
                    ID_number: {
                        minlength: window.phoneMinLengthMessage,
                        maxlength: window.phoneMaxLengthMessage,
                    },
                    remember_me: {
                        required: "{{ transWord('يجب الموافقة علي الشروط') }}",
                    },


                },


                errorElement: "span",
                errorLabelContainer: ".errorTxt",




                submitHandler: function(form) {
                    $('#program_btn').prop('disabled', true);
                    if ($("#remember_me").length && !$("#remember_me").is(':checked')) {
                        Swal.fire({
                            icon: 'error',
                            title: `<h5> ${window.agreeTerms} </h5> `,
                            showConfirmButton: false,
                            timer: 2000
                        });
                        return false;
                    }


                    var formData = new FormData(form);
                    let url = form.action;
                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            form.reset();
                            Swal.fire({
                                icon: 'success',
                                title: `<h5> ${data.success}</h5> `,
                                showConfirmButton: false,
                                timer: 2000
                            });
                            $('#program_btn').prop('disabled', false);

                        },
                        error: function(data) {
                            $('.error-message').text('');
                            var errors = data.responseJSON.errors;
                            $.each(errors, function(field, messages) {
                                var errorMessage = messages.join(', ');
                                $('#' + field + '_error').text(
                                    errorMessage);
                            });
                        },
                    });

                },
            });

        })
    </script>
@endpush
