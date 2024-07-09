
$(document).ready(function () {
    $('#usernameRegistroID, #emailRegistroID, #passwordRegistroID').on('click', function () {
        $('#errorMessages').hide();
    })
    $('#formID').on('submit', function (e) {
        e.preventDefault();

        var formData = {
            usernameRegistro: $('#usernameRegistroID').val(),
            emailRegistro: $('#emailRegistroID').val(),
            passwordRegistro: $('#passwordRegistroID').val()
        };

        $.ajax({
            type: 'POST',
            url: '../Controller/registrarUser.php',
            data: formData,
            dataType: 'text',
            encode: true,
            success: function (response) {
                console.log(response);

                if (response.includes("Email já existente!")) {
                    $('#errorMessages').html('Email já existente!');
                    $('#errorMessages').show();

                    return false;
                }

                $('#container_nome').hide();
                $('#container_email').hide();
                $('#container_senha').hide();
                $('#linkFazerLogin').hide();

                $('#errorMessages').html('Registro feito com sucesso!');
                $('#errorMessages').addClass('success-text');
                $('#errorMessages').show();
                $('#botao_registrar').text('Fazer Login');
                $('#botao_registrar').on('click', function () {
                    window.location.href = '../../index.php';
                    return false;
                })



            },
            error: function (error) {
                console.log("Erro no AJAX: " + error);
            }
        });
    });
});
