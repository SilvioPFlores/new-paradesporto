const swalWithBootstrapButtons = Swal.mixin({
	customClass: {
	  confirmButton: 'btn btn-success btnJS',
	  cancelButton: 'btn btn-danger btnJS'
	},
	buttonsStyling: false
});
function okNewPage(texto, page) {
    swalWithBootstrapButtons.fire({
        text: texto,
        icon: 'success',
        confirmButtonText: 'Ok',
    }).then(function (isConfirm) {
        if (isConfirm) {
            window.location.replace(page);
        }
    });
}
function erroNewPage(texto, page) {
    swalWithBootstrapButtons.fire({
        text: texto,
        icon: 'error',
        confirmButtonText: 'Ok',
    }).then(function (isConfirm) {
        if (isConfirm) {
            window.location.replace(page);
        }
    });
}
function lingua(lang) {
    $.ajax({
        url: "/language",
        type: "POST",
        data: {
            lang: lang,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function () {
            location.reload();
        }
    });
}
$(document).ready(function () {
    $.ajax({
        url: "/visita",
        type: "POST",
        data: {
            visita: "true",
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log(data);
        }
    });
});