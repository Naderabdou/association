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
                <h2>{{ transWord('طلب الحصول علي عضوية') }}</h2>
                <div class="text-pages">
                    <h6> <a href="{{ route('site.home') }}"> {{ transWord('الرئيسية') }}</a> <i
                            class="bi bi-chevron-double-left"></i>
                        {{ transWord('طلب الحصول علي عضوية') }}</h6>
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
                    <h2>{{ transWord('انضم الينا كعضو') }}</h2>
                </div>
                <form action="{{ route('site.request.membership.store') }}" method="POST" id="requestMembership">
                    @csrf
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
                                <div class="input-request">
                                    <input type="text" name="workplace" id="workplace"
                                        placeholder="{{ transWord('جهة العمل') }}">
                                        @error('workplace')
                                    <span class="alert alert-danger">
                                        <small class="errorTxt">{{ $message }}</small>
                                    </span>
                                @enderror
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <div class="sub-form-recruitment">
                                    <div class="input-request upload-flie">
                                        <input type="file" id="upload-1" name="payment_receipt" accept="image/*">
                                        <label for="upload-1" class="form-control">
                                            <span>{{ transWord('ارفق ايصال سداد رسوم العضوية ') }}</span>
                                            <i class="bi bi-upload"></i></label>
                                            @error('payment_receipt')
                                            <span  class="alert alert-danger">
                                                <small class="errorTxt">{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="buttom-membership">
                                <button id="membership_btn" type="submit">{{ transWord('Send') }}</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </section>
        <!-- end contact us --------->









    </main>

@endsection
@push('js')
<script>
    $(document).ready(function() {

        $.validator.addMethod("domain", function(value, element) {
            // Allow emails from gmail.com, yahoo.com, hotmail.com, and outlook.com
            return this.optional(element) ||
                /^[\w.-]+@(gmail\.com|yahoo\.com|hotmail\.com|outlook\.com)$/.test(value);
        }, window.emailmessage);
        $.validator.addMethod("phone_type", function(value, element) {
            return this.optional(element) || /^[0-9+]+$/.test(value);
        }, window.phoneMessage);



        $("#requestMembership").validate({


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
                    remote: {
                        url: "{{ route('admin.check.phoneMembership') }}",
                        type: "post",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            phone: function() {
                                return $("#phone").val();
                            }
                        },
                        dataFilter: function(data) {

                            var json = JSON.parse(data);
                            if (json.message) {
                                return "\"" + json.message + "\"";
                            }
                            return true;
                        }
                    }
                },
                ID_number: {
                    required: true,
                    minlength: 10,
                    maxlength: 15,
                    phone_type: true,
                    remote: {
                        url: "{{ route('admin.check.IDMembership') }}",
                        type: "post",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            ID_number: function() {
                                return $("#ID_number").val();
                            }
                        },
                        dataFilter: function(data) {

                            var json = JSON.parse(data);
                            if (json.message) {
                                return "\"" + json.message + "\"";
                            }
                            return true;
                        }
                    }
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

                workplace: {
                    required: true,
                    minlength: 3,
                    noSpecialChars: true
                },

                payment_receipt: {
                    required: true,
                    accept: "image/*"
                },



                email: {
                    required: true,
                    minlength: 3,
                    domain: true,
                    remote: {
                        url: "{{ route('admin.check.emailMembership') }}",
                        type: "post",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            email: function() {
                                return $("#email").val();
                            }
                        },
                        dataFilter: function(data) {

                            var json = JSON.parse(data);
                            if (json.message) {
                                return "\"" + json.message + "\"";
                            }
                            return true;
                        }
                    }
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



            },


            errorElement: "span",
            errorLabelContainer: ".errorTxt",




            submitHandler: function(form) {
               // $('#subscribe_submit').removeClass('ctm-btn').addClass('ctm-btn-send')
            $('#membership_btn').prop('disabled', true);
                console.log('submit');
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
                        $('#membership_btn').prop('disabled', false);
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
