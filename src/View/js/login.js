
$(document).ready(function () {
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
                if(response.includes("Login feito com sucesso!")){
                    document.location.href = "./src/View/painel.php"
                }else if(response.includes("E-mail ou senha incorreta!")){
                    $("#errorMessages").html("E-mail ou senha incorreta!");
                    $("#errorMessages").show();
                }

                $("#emailLoginID, #passwordLoginID").on('click', function (){
                    $("#errorMessages").hide();
                })
                
            },
            error: function (error) {
                console.log("Erro no AJAX: " + error);
            }
        });
    });
});
