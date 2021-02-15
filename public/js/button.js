// Preloader
$(window).on("load", function() {
    if ($("#preloader").length) {
        $("#preloader")
            .delay(100)
            .fadeOut("slow", function() {
                $(this).remove();
            });
    }
});

mybutton = document.getElementById("myBtn");

window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 120 ||
        document.documentElement.scrollTop > 120
    ) {
        mybutton.style.animation = "fadeIn";
        mybutton.style.animationDuration = "1s";
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// Toggle .header-scrolled class to #header when page is scrolled
$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $(".navbar").addClass("header-scrolled");
    } else {
        $(".navbar").removeClass("header-scrolled");
    }
});

if ($(window).scrollTop() > 100) {
    $(".navbar").addClass("header-scrolled");
}
