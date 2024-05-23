
$(document).ready(function () {

    $.validator.addMethod("noSpecialChars", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9\u0600-\u06FF ]*$/.test(value);
    }, window.noSpecialChars);

    $("#regulationscreateForm").validate({
        // initialize the plugin

        rules: {
            category_id: {
                required: true,
            },

            pdf : {
                required: true,
                accept: "application/pdf",

            },
            name_ar : {
                required: true,
                noSpecialChars: true,


            },
            name_en : {
                required: true,
                noSpecialChars: true,

            },

        },

        messages: {
            pdf : {
                accept: window.acceptMessagePdf,
            }
        },

        errorElement: "span",
        errorLabelContainer: ".errorTxt",

        submitHandler: function (form) {
            form.submit();
        },
    });

    $("#regulationsUpdateForm").validate({
        // initialize the plugin

        rules: {
            category_id: {
                required: true,
            },

            pdf : {
                accept: "application/pdf",

            },

            name_ar : {
                required: true,
                noSpecialChars: true,

            },

            name_en : {
                required: true,
                noSpecialChars: true,

            },


        },

        messages: {
            pdf : {
                accept: window.acceptMessagePdf,
            }
        },

        errorElement: "span",
        errorLabelContainer: ".errorTxt",

        submitHandler: function (form) {
            form.submit();
        },
    });
});
