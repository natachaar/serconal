document.querySelectorAll(".change-pass-target").forEach(button => {
    button.addEventListener("click", function () {
        const passwordInput = this.closest(".input-group").querySelector(".password-input");
        const passwordIcon = this.querySelector(".password-icon");

        // Toggle the type attribute
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordIcon.classList.remove("fa-eye");
            passwordIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            passwordIcon.classList.remove("fa-eye-slash");
            passwordIcon.classList.add("fa-eye");
        }
    });
});

function login() {

    var form = document.getElementById('formLogin');

    if (form.checkValidity() === false) {
        event.preventDefault();
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
                if (response.success) {
                    window.location.href = response.redirect;
                } else {
                    // Mostrar mensajes de error
                    if (response.errors.username) {
                        $('#username').addClass('is-invalid');
                        $('#username').siblings('.invalid-feedback').text(response.errors.username);
                    } else {
                        $('#username').removeClass('is-invalid').addClass('is-valid');
                    }

                    if (response.errors.password) {
                        $('#password').addClass('is-invalid');
                        $('#password').siblings('.invalid-feedback').text(response.errors.password);
                    } else {
                        $('#password').removeClass('is-invalid').addClass('is-valid');
                    }
                }
            },
            error: function () {
                $('#error').html('<div class="alert alert-danger align-items-center" role="alert"><i class="fa-solid fa-circle-exclamation me-2"></i>Error al iniciar sesión. Por favor, inténtalo de nuevo.</div>');
            }
        });
    }
}

function recoverPassword() {

    const form = document.getElementById('form-recoverPassword');
    const email = document.getElementById('recover-email').value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (form.checkValidity() === false || !emailPattern.test(email)) {
        event.preventDefault();
        event.stopPropagation();
        form.classList.add('was-validated');
    } else {
        var formData = {
            email: email
        };
        showModal();
        $.ajax({
            url: form.action,
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                hideModal();
                if (response.success) {
                    Swal.fire({
                        text: response.message,
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#377dff'
                    });
                    var modal = bootstrap.Modal.getInstance(document.getElementById('recoverPasswordModal'));
                    modal.hide();
                } else {
                    $('#recover-email').addClass('is-invalid');
                    $('#recover-email').siblings('.invalid-feedback').text(response.errors);
                }
            },
            error: function () {
                console.log('Error...');
            }
        });
    }
}

// Función para validar las contraseñas
function newPassword() {
    var passwordField = document.getElementById('password');
    var confirmPasswordField = document.getElementById('password2');
    var password = passwordField.value;
    var confirmPassword = confirmPasswordField.value;
    var form = document.getElementById('form-new-password');
    var errorDiv = document.getElementById('error');

    // Limpiar mensajes de error y clases de validación
    errorDiv.innerHTML = '';
    passwordField.classList.remove('is-invalid', 'is-valid');
    confirmPasswordField.classList.remove('is-invalid', 'is-valid');

    // Validar que las contraseñas no estén vacías
    if (password === '' || confirmPassword === '') {
        if (password === '') {
            passwordField.classList.add('is-invalid');
        } else {
            passwordField.classList.add('is-valid');
        }
        if (confirmPassword === '') {
            confirmPasswordField.classList.add('is-invalid');
        } else {
            confirmPasswordField.classList.add('is-valid');
        }
        return;
    }

    // Expresión regular para todas las validaciones:
    var passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?])(?=.{8,})/;

    // Validar la contraseña con la expresión regular
    if (!passwordRegex.test(password)) {
        errorDiv.innerHTML = '<div class="alert alert-danger align-items-center text-start" role="alert">'
                + '<i class="fa-solid fa-circle-exclamation me-2"></i>'
                + 'La contraseña debe cumplir con los siguientes requisitos:'
                + '<ul class="fs-sm">'
                + '<li>Debe tener al menos 6 caracteres.</li>'
                + '<li>Debe contener al menos una letra mayúscula.</li>'
                + '<li>Debe contener al menos un dígito.</li>'
                + '<li>Debe contener al menos un carácter especial (@ $ ! % * ? - / + = _ &).</li>'
                + '</ul>'
                + '</div>';
        passwordField.classList.add('is-invalid');
        return;
    }

    // Validar que ambas contraseñas coincidan
    if (password !== confirmPassword) {
        confirmPasswordField.classList.add('is-invalid');
        return;
    } else {
        confirmPasswordField.classList.add('is-valid');
    }

    // Si todo está correcto, puedes enviar el formulario
    passwordField.classList.add('is-valid');

    var formData = {
        password: password,
        id: $('#user_id').val()
    };
    showModal();
    $.ajax({
        url: form.action,
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function (response) {
            hideModal();
            if (response.success) {
                window.location.href = response.redirect;
            } else {
                $('#error').html('<div class="alert d-flex alert-danger" role="alert"><i class="ci-banned fs-lg pe-1 mt-1 me-2"></i><div>' + response.message + '</div></div>');
            }
        },
        error: function () {
            console.log('Error...');
        }
    });
}

function showModal() {
    $('body').loadingModal({text: 'Procesando...'});
    $('body').loadingModal('animation', 'circle').loadingModal('backgroundColor', 'gray');
}

function hideModal() {
    $('body').loadingModal('destroy');
}
