


const doc = document;
const x = window.matchMedia("(min-width: 992px)");
const right = doc.querySelector(".right");
const left = doc.querySelector(".left");
const container = doc.querySelector(".area__container");
const hiddenMessage = doc.querySelector(".hidden__message");

function imageChange(x) {
    if (x.matches) {
        right.addEventListener("click", () => {
            container.classList.add("hover-right");
            hiddenMessage.style.opacity = 0;
        });

        right.addEventListener("mouseleave", () => {
            container.classList.remove("hover-right");
            hiddenMessage.style.opacity = 0;
        });
        right.addEventListener("mouseenter", () => {
            hiddenMessage.style.opacity = 1;
        });
    } else {
        
    }
}
imageChange(x);
x.addListener(imageChange);


(function ($) {
    $("#nav__btn").click(function () {

        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $("body").removeClass("menu__active");
            $(".content__wrapper").css("opacity", "1");
            $(".web__title a").css("color", "#636363");
            $(".menu").removeClass("visible").delay(100).fadeOut();
        } else {
            $(this).addClass("active");
            $("body").addClass("menu__active");
            $(".content__wrapper").css("opacity", ".1");
            $(".web__title a").css("color", "#fff");
            $(".menu").addClass("visible").delay(100).fadeIn();
        }
    });
})(jQuery);
