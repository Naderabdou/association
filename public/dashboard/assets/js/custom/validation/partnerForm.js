$(document).ready(function () {
    $("#createPartnerForm").validate({
        // initialize the plugin

        rules: {

            link: {
                // required: true,
                url: true
            },
            image: {
                required: true,
                accept: "image/png, image/jpeg, image/svg+xml"
            },
        },

        messages: {
            image: {
                accept : window.avatarMessage
            }
        },

        errorElement: "span",
        errorLabelContainer: ".errorTxt",

        submitHandler: function (form) {
            form.submit();
        },
    });

    $("#updateForm").validate({
        // initialize the plugin

        rules: {

            link: {
                // required: true,
                url: true
            },
            image: {
                accept: "image/png, image/jpeg, image/svg+xml",

            },
        },

        messages: {
            image: {
                accept : window.avatarMessage
            }

        },

        errorElement: "span",
        errorLabelContainer: ".errorTxt",

        submitHandler: function (form) {
            form.submit();
        },
    });
});
