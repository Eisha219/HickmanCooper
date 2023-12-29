
$(".navbar-nav .nav-item").click(function () {
    $(".navbar-nav .nav-item").removeClass("active");
    $(this).addClass("active");
});
$(".navbar-nav .nav-item").mouseenter(function () {
    $(this).addClass("active");
});

$(".navbar-nav .nav-item").mouseleave(function () {
    $(this).removeClass("active");
});