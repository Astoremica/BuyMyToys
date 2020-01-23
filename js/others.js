$(document).ready(function() {
    // 手書きJavaScript
    $("#login_icon").click(function() {
        $("#login_form").addClass('active_form');
    });
    $("#close_icon").click(function() {
        $("#login_form").removeClass('active_form');
    });

});