
function enableInput() {

    $("#searchButton").button("loading");
    $("#searchField").attr("disabled", false);

}
$(document).ready(function () {

    $('#searchButton').on('click', function () {

        let tipo;
        const valorInput = $('#searchField').val();
        if (valorInput.includes('@')) {
            tipo = "email";
        } else if (!isNaN(valorInput)) {
            tipo = "id";
        } else {
            tipo = "nome";
        }


        var formData = {
            tipo,
            inputPesquisa: $('#searchField').val(),
        }

        $.ajax({
            type: 'POST',
            url: '../Controller/painelPesquisa.php',
            data: formData,
            dataType: 'json',
            success: function (response) {
                $("#deviceTable").empty();

                var headerPesquisa = '<tr>' +
                    '<th> ID </th>' +
                    '<th> Nome </th>' +
                    '<th> Email </th>' +
                    '<th> Administrador </th>' +
                    '<th> Data</th>' +
                    '</tr>';

                $('#deviceTable').append(headerPesquisa);

                for (let i = 0; i < response.length; i++) {
                    var usuario = response[i];

                    var linha = '<tr>' +
                        '<td>' + usuario[0] + '</td>' +
                        '<td>' + usuario[1] + '</td>' +
                        '<td>' + usuario[2] + '</td>' +
                        '<td>' + (usuario[3] ? 'Sim' : 'Não') + '</td>' +
                        '<td>' + usuario[4] + '</td>' +
                        '</tr>';

                    $('#deviceTable').append(linha);
                    
                }




            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Erro no AJAX:");
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    });
});


function initEvents() {

    $("#searchButton").on("click", function () {

        var $btn = $(this).button("loading");
        $("#searchField").attr("disabled", true);

    });

    $(".inputContainer").hover(function () {

        $(this).stop().animate({
            borderBottomWidth: "4px"
        }, {
            duration: 170,
            complete: function () { }
        });

    }, function () {

        $(this).stop().animate({
            borderBottomWidth: "2px"
        }, {
            duration: 170,
            complete: function () { }
        });

    });

}