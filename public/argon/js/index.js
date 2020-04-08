
$('#formLogin').submit(function (e) {
    e.preventDefault();

    Swal.fire({
        icon: "info",
        title: "Aguarde",
        text: "Validando dados...",
        allowEscapeKey: false,
        allowOutsideClick: false,
    });
    Swal.showLoading()

    $.ajax({
        type: "post",
        url: "/login",
        data: $(e.currentTarget).serializeArray(),
        dataType: "json",
        success: function (response) {
            Swal.close();
            if (response.error != undefined && response.error === true) {
                Swal.fire({
                    icon: "error",
                    title: "Ocorreu um erro :(",
                    text: response.messege,
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                });
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Tudo Certinho :) ',
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    showConfirmButton: false,
                }).then(window.location.href = '/home');
            }
        }
    });
});

$('#createUser').submit(function (e) {
    e.preventDefault();

    Swal.fire({
        icon: "info",
        title: "Aguarde",
        text: "Validando dados...",
        allowEscapeKey: false,
        allowOutsideClick: false,
    });
    Swal.showLoading()

    $.ajax({
        type: "post",
        url: "/cadastrar",
        data: $(e.currentTarget).serializeArray(),
        dataType: "json",
        success: function (response) {
            Swal.close();
            if (response.error != undefined && response.error === true) {
                Swal.fire({
                    icon: "error",
                    title: "Ocorreu um erro :(",
                    text: response.messege,
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                });
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Tudo Certinho :) ',
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    showConfirmButton: true,
                }).then(() => {
                    location.reload('/login')
                });
            }
        }
    });
});

