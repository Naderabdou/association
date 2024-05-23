<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/js/custom.js') }}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdarVlRZOccFIGWJiJ2cFY8-Sr26ibiyY&libraries=places&callback=initAutocomplete&language=ar"
    async defer></script>
<script src="{{ asset('site/js/map.js') }}"></script>
<script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3.9.0/dist/ScrollTrigger.min.js"></script>
<script type="text/javascript" src="{{ asset('site/js/locomotive-scroll.min.js') }}"></script>
<script src="{{ asset('site/js/index.js') }}"></script>
<script src="{{ asset('dashboard/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (app()->getLocale() == 'ar')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/localization/messages_ar.min.js"></script>
@else
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/localization/messages_en.min.js"></script>
@endif
<script>
    @php
        $messages = [
            'avatarMessage' => transWord('The image must be png, jpg, jpeg,svg'),
            'backgroundMessage' => transWord('The background must be png, jpg, jpeg,svg'),
            'phoneMessage' => transWord('The phone must be numbers'),
            'emailmessage' => transWord('Please enter an email from gmail.com, yahoo.com, hotmail.com, or outlook.com.'),
            'acceptMessage' => transWord('The type must be png, jpg, jpeg'),
            'acceptMessageVideo' => transWord('The type must be mp4'),
            'linkYoutube' => transWord('The video link must be allowed from youtube'),
            'facebookMessage' => transWord('The link must be from facebook'),
            'twitterMessage' => transWord('The link must be from twitter'),
            'linkedinMessage' => transWord('The link must be from linkedin'),
            'githubMessage' => transWord('The link must be from github'),
            'passwordConfirmationMessage' => transWord('The password and confirmation password do not match'),
            'phoneMinLengthMessage' => transWord('The phone must be at least 10 numbers'),
            'phoneMaxLengthMessage' => transWord('The phone must be at most 14 numbers'),
            'youtube' => transWord('Please enter a valid YouTube URL'),
            'vimeo' => transWord('Please enter a valid Vimeo URL'),
            'videoMessage' => transWord('The video must be mp4'),
            'noSpecialChars' => transWord('The field must not contain special characters'),
            'pdf' => transWord('The file must be pdf'),
            'agreeTerms' => transWord('You must agree to the terms and conditions'),
        ];
    @endphp

    @foreach ($messages as $key => $message)
        window.{{ $key }} = "{{ $message }}";
    @endforeach
</script>

<script>
    $(document).ready(function() {
        console.log('contact');
        $.validator.addMethod("noSpecialChars", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9\u0600-\u06FF ]*$/.test(value);
        }, window.noSpecialChars);
        $.validator.addMethod("domain", function(value, element) {
            // Allow emails from gmail.com, yahoo.com, hotmail.com, and outlook.com
            return this.optional(element) ||
                /^[\w.-]+@(gmail\.com|yahoo\.com|hotmail\.com|outlook\.com)$/.test(value);
        }, window.emailmessage);

        $.validator.addMethod("phone_type", function(value, element) {
            return this.optional(element) || /^[0-9+]+$/.test(value);
        }, window.phoneMessage);


        $("#contact_form").validate({


            rules: {
                // Define validation rules for your form fields here
                first_name: {
                    required: true,
                    minlength: 2,
                    noSpecialChars: true
                },
                last_name: {
                    required: true,
                    minlength: 2,
                    noSpecialChars: true

                },
                email: {
                    required: true,
                    minlength: 3,
                    domain: true
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 15,
                    phone_type: true,
                },
                message: {
                    required: true,
                    minlength: 3,
                    noSpecialChars: true
                },

                // Add more fields as needed
            },

            messages: {

                phone: {
                    minlength: window.phoneMinLengthMessage,
                    maxlength: window.phoneMaxLengthMessage,
                }



            },



            errorElement: "span",
            errorLabelContainer: ".errorTxt",


            submitHandler: function(form) {
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

<script>
    $(document).ready(function() {


        $.validator.addMethod("domain", function(value, element) {
            // Allow emails from gmail.com, yahoo.com, hotmail.com, and outlook.com
            return this.optional(element) ||
                /^[\w.-]+@(gmail\.com|yahoo\.com|hotmail\.com|outlook\.com)$/.test(value);
        }, window.emailmessage);



        $("#subscribe").validate({


            rules: {
                // Define validation rules for your form fields here

                email: {
                    required: true,
                    minlength: 3,
                    domain: true,
                    remote: {
                        url: "{{ route('admin.check.email') }}",
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


            errorElement: "span",
            errorLabelContainer: ".errorTxt",




            submitHandler: function(form) {
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

@stack('js')
