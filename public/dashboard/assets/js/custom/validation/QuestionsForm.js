$(document).ready(function () {
    $.validator.addMethod("noSpecialChars", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9 ]*$/.test(value);
    }, window.noSpecialChars);

    $("#createQuestionsForm").validate({
        // initialize the plugin



        rules: {

            question_ar: {
                required: true,
                minlength: 3,
            },
            question_en: {
                required: true,
                minlength: 3,

            },

            answer_ar: {
                required: true,
                minlength: 3,


            },
            answer_en: {
                required: true,
                minlength: 3,

            },






        },



        errorElement: "span",
        errorLabelContainer: ".errorTxt",

        submitHandler: function (form) {

            form.submit();
        },
    });

    $("#updateQuestionsForm").validate({
        // initialize the plugin

        rules: {
            question_ar: {
                required: true,
                minlength: 3,

            },
            question_en: {
                required: true,
                minlength: 3,

            },

            answer_ar: {
                required: true,
                minlength: 3,


            },
            answer_en: {
                required: true,
                minlength: 3,

            },





        },

        errorElement: "span",
        errorLabelContainer: ".errorTxt",

        submitHandler: function (form) {
            form.submit();
        },
    });
});
