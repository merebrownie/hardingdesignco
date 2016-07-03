/* 
 *  by meredith browne
 */

$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
//        itemWidth: 188,
//        itemMargin: 5
    });
});

$(function() {
   $('.pop').on('click', function() {
       $('.imagepreview').attr('src', $(this).find('img').attr('src'));
       $('#imagemodal').modal('show');
   });
});

$(".modal-fullscreen").on('show.bs.modal', function () {
    setTimeout( function () {
        $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
    }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});