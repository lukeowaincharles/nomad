


const doc = document;
const right = doc.querySelector(".right");
const left = doc.querySelector(".left");
const container = doc.querySelector(".area__container");
const hiddenMessage = doc.querySelector(".hidden__message");

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

(function ($) {
    $("#nav__btn").click(function () {

        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $("body").removeClass("menu__active");

            $(".menu").removeClass("visible").delay(100).fadeOut();
        } else {
            $(this).addClass("active");
            $("body").addClass("menu__active");

            $(".menu").addClass("visible").delay(100).fadeIn();
        }
    });
})(jQuery);
