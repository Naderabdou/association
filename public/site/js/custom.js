

$(".sub-regulations > h2").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("active")
    $(this).next().slideToggle()

})




// upload file ==============

$("#upload-1").change(function (e) {
    $(".input-form label span").text(e.target.files[0].name);
});


$(".accordion ul li h3").click(function (e) {
    e.preventDefault();
    $(this).next().slideToggle(300);
    $(this).parent().toggleClass("active");
});



$(".click-element").click(function (e) {
    e.preventDefault();
    $(this).next().slideToggle();
    $(".click-element1").next().slideUp();
});

$(".click-element1").click(function (e) {
    e.preventDefault();
    $(this).next().slideToggle();
    $(".click-element").next().slideUp();
});




// start-slider 1,2
$('#slider-1').owlCarousel({
    // loop: true,
    margin: 10,
    autoHeight: true,
    items: 1,
    rtl: true,
    responsiveClass: true,
    nav: false,
    center: true,

})



$('#slider-2').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    responsiveClass: true,
    items: 4,
    dots: false,
    rtl: true,
    autoplay: true,
    smartSpeed: 1800,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});
$('#slider-2').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsiveClass: true,
    items: 4,
    dots: false,
    rtl: true,
    autoplay: true,
    smartSpeed: 1800,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});


$('#slider-3').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsiveClass: true,
    items: 4,
    dots: false,
    rtl: true,
    autoplay: true,
    smartSpeed: 1800,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});


$('.slider-commitees').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsiveClass: true,
    items: 3,
    dots: false,
    rtl: true,
    autoplay: true,
    smartSpeed: 1800,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});
if ($("#slider-partners").length) {
    $("#slider-partners").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        items: 5,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        rtl: true,
        autoplay: true,
        autoplayHoverPause: false,
        dots: false,
        smartSpeed: 700,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });
}

// end-slider


function close() {
    $(".dropdowm-element").slideUp();
}


var $winl = $(window); // or $box parent container
var $boxl = $(
    ".click-element, .click-element1 ,.dropdowm-element"
);
$winl.on("click.Bst", function (event) {
    if (
        $boxl.has(event.target).length === 0 && //checks if descendants of $box was clicked
        !$boxl.is(event.target) //checks if the $box itself was clicked
    ) {
        close();
    }
});

if ($("#slider-client").length) {
    $("#slider-client").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        items: 5,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        rtl: true,
        autoplay: true,
        autoplayHoverPause: false,
        dots: false,
        smartSpeed: 700,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });
}




// start-loading
setTimeout(() => {
    $(".loader").fadeOut(1000);
}, 1000);
// end-loading




// start-header
document.addEventListener("DOMContentLoaded", function () {
    const myDiv = document.querySelector(".element")
    document.querySelector(".menu").addEventListener("click", function () {
        myDiv.classList.toggle("active");
        document.querySelector(".bg-div-mune").classList.toggle("active");
    });
    document.querySelector(".bg-div-mune").addEventListener("click", function () {
        myDiv.classList.remove("active");
        document.querySelector(".hambergerIcon").classList.remove("open")
        this.classList.remove("active");
    })
})
// end-header




// start-btn-fixed-scroll
let btn = document.getElementById('btn')

console.log(btn);
window.onscroll = function () {
    if (scrollY >= 400) {
        btn.style.display = 'block';
    } else {
        btn.style.display = 'none';
    }
}
btn.addEventListener("click", function () {
    scroll({
        left: 0,
        top: 0,
        behavior: "smooth"
    })
})
//end-btn-fixed-scroll










// start-scroll-header
$('.scroll-1').click(function () {
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 100
    }, 2100);
    return false;
});
// end-scroll-header




// svg-start
if (document.getElementById("g").length) {

    lightGallery(document.getElementById("lightgallery"), {
        thumbnail: true,
        selector: ".image-item",
    });

}
// svg-end




