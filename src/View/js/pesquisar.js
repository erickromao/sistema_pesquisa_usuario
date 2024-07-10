
function enableInput() {

    $("#searchButton").button("loading");
    $("#searchField").attr("disabled", false);

}
$(document).ready(function () {
    // initEvents();

    $('#searchButton').on('click', function () {

        var formData = {
            usernameRegistro: $('#searchField').val(),
        }

        $.ajax({
            type: 'GET',
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

                for (let i = 0; i < response.length; i++) {
                    var usuario = response[i];
                    // console.log(usuario[i])
                    // console.log(usuario[i+1])
                    // console.log(usuario[i+2])
                    // console.log(usuario[i+3])

                    var linha = '<tr>' +
                        '<td>' + usuario[i] + '</td>' +
                        '<td>' + usuario[i + 1] + '</td>' +
                        '<td>' + usuario[i + 2] + '</td>' +
                        '<td>' + (usuario[i + 3] ? 'Sim' : 'Não') + '</td>' +
                        '<td>' + usuario[i + 4] + '</td>' +
                        '</tr>';

                    console.log(linha)
                    $('#deviceTable').append(headerPesquisa);
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