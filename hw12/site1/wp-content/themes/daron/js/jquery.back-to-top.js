jQuery(document).ready(function(o) {
    var t = 300,
        a = 1200,
        s = 700,
        l = o(".js__back-to-top");
    o(window).scroll(function() {
        o(this).scrollTop() > t ? l.addClass("-is-visible") : l.removeClass("-is-visible -zoom-out"), o(this).scrollTop() > a && l.addClass("-zoom-out")
    }), l.on("click", function(t) {
        t.preventDefault(), o("body,html").animate({
            scrollTop: 0
        }, s)
    })
});