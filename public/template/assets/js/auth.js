$("body").on("contextmenu", "img", function (e) {
    return false;
});
$('img').attr('draggable', false);
$(document).ready(function () {
    $(window).keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
        }
    });
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function authAdmin(button, form, uri, title) {
    $(button).submit(function () {
        return false;
    });
    let data = $(form).serialize();
    $(button).prop("disabled", true);
    $(button).html("Please Wait");
    $.ajax({
        type: "POST",
        url: uri,
        data: data,
        dataType: 'json',
        success: function (response) {
            if (response.alert == "success") {
                Swal.fire(
                    "Login Success!",
                    response.message,
                    "success"
                );
                $(form)[0].reset();
                setTimeout(function () {
                    $(button).prop("disabled", false);
                    $(button).html(title);
                    location.href = "barang";
                }, 2000);
            } else if (response.alert == "error") {
                Swal.fire({
                    type: "error",
                    title: "Oops...",
                    text: response.message,
                });
                setTimeout(function () {
                    $(button).prop("disabled", false);
                    $(button).html(title);
                }, 2000);
            }
        },
    });
}
