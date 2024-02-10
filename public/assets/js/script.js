function form(form) {
    $(form).mouseenter(function () {
        $(form).focus();
    });
    $(form).mouseleave(function () {
        $(form).blur();
    });
}
