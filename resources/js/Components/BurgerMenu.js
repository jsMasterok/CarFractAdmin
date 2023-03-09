import $ from "jquery";

$(document).ready(() => {
    $("#openBurger").click(() => {
        $("#burgerMenu").removeClass("-right-full");
        $("body").css({
            overflow: "hidden",
        });
    });

    $("#closeBurger").click(() => {
        $("#burgerMenu").addClass("-right-full");
        $("body").css({
            overflow: "auto",
        });
    });
});
