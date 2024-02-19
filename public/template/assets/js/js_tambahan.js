// Menonaktifkan fungsi klik kanan pada gambar
$("body").on("contextmenu", "img", function (e) {
    e.preventDefault();
});

// Menonaktifkan fungsi drag-and-drop pada gambar
$('img').attr('draggable', false);

// Mencegah pengiriman form saat tombol enter ditekan
$(window).keydown(function (event) {
    if (event.keyCode == 13) {
        event.preventDefault();
    }
});

// Menambahkan token CSRF ke setiap permintaan Ajax
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Fungsi untuk menghandle upload form
function handle_upload(tombol, form, url, method, back) {
    $(document).on('submit', form, function (e) {
        e.preventDefault();
        let data = new FormData(this);
        data.append('_method', method);
        $(tombol).prop("disabled", true);
        $(tombol).attr("data-kt-indicator", "on");
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            enctype: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                if (response.alert == "success") {
                    console.log(response);
                    toastr.success(response.message);
                    $(form)[0].reset();
                    setTimeout(function () {
                        $(tombol).prop("disabled", false);
                        location.href = back;
                    }, 2000);
                } else {
                    toastr.error(response.message);
                    setTimeout(function () {
                        $(tombol).prop("disabled", false);
                    }, 2000);
                }
            },
        });
        return false;
    });
}


function handle_confirm(title, confirm_title, deny_title, method, route) {
    Swal.fire({
        title: title,
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: confirm_title,
        denyButtonText: deny_title,
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: method,
                url: route,
                dataType: 'json',
                success: function (response) {
                    Swal.fire(response.message);
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
            });
        } else if (result.isDenied) {
            Swal.fire('Konfirmasi dibatalkan', '', 'info')
        }
    });
}
