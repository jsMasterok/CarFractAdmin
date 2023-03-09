import $ from "jquery";

$(document).ready(() => {
    $("#openGarageFilter").click(() => {
        $("#garageFilter").removeClass("-left-full");
        $("body").css({
            overflow: "hidden",
        });
    });

    $("#closeGarageFilter").click(() => {
        $("#garageFilter").addClass("-left-full");
        $("body").css({
            overflow: "auto",
        });
    });
});
