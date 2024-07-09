
$(document).ready(function () {
    $(document).on('click', function (event) {
        if (!$(event.target).closest('#errorMessages').length) {
            $('#errorMessages').hide();
        }
    });

    $('#formularioID').on('submit', function (e) {
        e.preventDefault();
        var formData = {
            emailLogin: $('#emailLoginID').val(),
            passwordLogin: $('#passwordLoginID').val(),
        };

        $.ajax({
            type: 'POST',
            url: './src/Controller/loginController.php',
            data: formData,
            dataType: 'text',
            encode: true,
            success: function (response) {

                if (response.includes("Login feito com sucesso!")) {
                    document.location.href = "./src/View/painel.php"
                } else if (response.includes("E-mail ou senha incorreta!")) {

                    $("#errorMessages").html("E-mail ou senha incorreta!");
                    $("#errorMessages").show();
                }

            },
            error: function (error) {
                console.log("Erro no AJAX: " + error);
            }
        });
    });
});
