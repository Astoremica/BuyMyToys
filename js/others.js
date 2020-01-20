$(document).ready(function() {
    $("#login_icon").click(function() {
        $("#login_form").addClass('active_form');
    });
    $("#close_icon").click(function() {
        $("#login_form").removeClass('active_form');
    });

    // $("#favo_icon").click(function() {
    //     if (!$(this.hasClass('fav'))) {
    //         $(this)
    //             .addClass('fav')
    //             .attr('src', './images/materials/heart_fav.png')
    //     } else {
    //         $(this)
    //             .removeClass('fav')
    //             .attr('src', './images/materials/heart.png')
    //     }
    // });

});