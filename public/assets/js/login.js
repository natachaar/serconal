document.getElementById("changePassTarget").addEventListener("click", function () {
    const passwordInput = document.getElementById("password");
    const passwordIcon = document.getElementById("changePassIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordIcon.classList.remove("bi-eye");
        passwordIcon.classList.add("bi-eye-slash");
    } else {
        passwordInput.type = "password";
        passwordIcon.classList.remove("bi-eye-slash");
        passwordIcon.classList.add("bi-eye");
    }
});


function login() {

    var form = document.getElementById('formLogin');

    if (form.checkValidity() === false) {
        event.stopPropagation();
        form.classList.add('was-validated');
    } else {
        var formData = {
            username: $('#username').val(),
            password: $('#password').val()
        };
        showModal();
        $.ajax({
            url: form.action,
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                hideModal();
                if (response.status === 'success') {
                    window.location.href = response.redirect;
                } else {
                    // Mensaje de error general
                    $('#error').html(
                            '<div class="alert alert-danger align-items-center" role="alert">' +
                            '<i class="bi bi-exclamation-octagon me-2"></i>' + response.message +
                            '</div>'
                            );
                    // Opcional: Marcar campos como inválidos
                    $('#username, #password').addClass('is-invalid');
                }
            },
            error: function () {
                hideModal();
                $('#error').html(
                        '<div class="alert alert-danger align-items-center" role="alert">' +
                        '<i class="bi bi-exclamation-octagon me-2"></i> Error al iniciar sesión. Por favor, inténtalo de nuevo.' +
                        '</div>'
                        );
            }
        });
    }
}

function showModal() {
    $('body').loadingModal({text: 'Procesando...'});
    $('body').loadingModal('animation', 'circle').loadingModal('backgroundColor', 'gray');
}

function hideModal() {
    $('body').loadingModal('destroy');
}
