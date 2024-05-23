
$(document).ready(function () {

    $.validator.addMethod("noSpecialChars", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9\u0600-\u06FF ]*$/.test(value);
    }, window.noSpecialChars);

    $("#DirectorscreateForm").validate({
        // initialize the plugin

        rules: {
            name_ar: {
                required: true,
                minlength: 3,
                noSpecialChars: true

            },
            name_en: {
                required: true,
                minlength: 3,
                noSpecialChars: true

            },
            job_title_en : {
                required: true,
                minlength: 3,
                noSpecialChars: true

            },
            job_title_ar : {
                required: true,
                minlength: 3,
                noSpecialChars: true

            },

            image: {
                required: true,
                accept: "image/png, image/jpeg, image/svg+xml"

            },
            category_id: {
                required: true

            },

        },
        messages : {
            image : {
                accept : window.iconMessage
            }

        },

        errorElement: "span",
        errorLabelContainer: ".errorTxt",

        submitHandler: function (form) {
            form.submit();
        },
    });

    $("#DirectorsUpdateForm").validate({
        // initialize the plugin

        rules: {
            name_ar: {
                required: true,
                minlength: 3,
                noSpecialChars: true

            },
            name_en: {
                required: true,
                minlength: 3,
                noSpecialChars: true

            },
            job_title_en : {
                required: true,
                minlength: 3,
                noSpecialChars: true

            },
            job_title_ar : {
                required: true,
                minlength: 3,
                noSpecialChars: true

            },

            image: {
                accept: "image/png, image/jpeg, image/svg+xml"

            },
            category_id: {
                required: true

            },

        },
        messages : {
            image : {
                accept : window.iconMessage
            }

        },

        errorElement: "span",
        errorLabelContainer: ".errorTxt",

        submitHandler: function (form) {
            form.submit();
        },
    });
});
