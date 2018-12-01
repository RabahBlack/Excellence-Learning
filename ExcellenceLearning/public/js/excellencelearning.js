

$(document).ready(function () {
    $('#searchCourseDiv input').width($('#searchCourseDiv').width() / 2);

    $('#searchCourseDiv input').focus(function () {
        $(this).width($('#searchCourseDiv').width());
    });

    $('#searchCourseDiv input').blur(function () {
        $(this).width($('#searchCourseDiv').width() / 2);
    });
});