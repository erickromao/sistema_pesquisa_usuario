$(document).ready(function () {
  $(document).on('click', function (event) {
    if (!$(event.target).closest('#errorMessages').length) {
      $('#errorMessages').hide();
      $('#errorMessages').removeClass('success-text');
    }
  });

  $("#formPassword").on('submit', function (e) {
    e.preventDefault();

    var new_password = $("#new_password").val().trim();
    var confirm_password = $("#confirm_password").val().trim();
    var old_password = $("#old_password").val().trim();

    if (!new_password || !confirm_password || !old_password) {
      $("#errorMessages").html("Preencha todos os campos!");
      $("#errorMessages").show();
      return false;
    }

    var dados = {
      new_password: new_password,
      confirm_password: confirm_password,
      old_password: old_password,
    };

    $.ajax({
      type: "POST",
      url: "../Controller/alterarSenha.php",
      data: dados,
      success: function (response) {

        if (response.includes("Houve um erro ao atualizar a senha:")) {
          $("#errorMessages").html("Houve um erro ao atualizar a senha, tente mais tarde!");
          $("#errorMessages").show();
        } else if (response.includes("Ocorreu um erro:")) {
          $("#errorMessages").html("Ocorreu um erro ao atualizar a senha, tente mais tarde!");
          $("#errorMessages").show();
        }

        switch (response) {
          case "Senha atualizada com sucesso!":
            $("#errorMessages").html("Senha atualizada com sucesso!");
            $('#errorMessages').addClass('success-text');
            $("#errorMessages").show();
            break;

          case "As novas senhas não conferem!":
            $("#errorMessages").html("As novas senhas não conferem!");
            $("#errorMessages").show();
            break;

          case "Senha incorreta!":
            $("#errorMessages").html("Senha incorreta!");
            $("#errorMessages").show();
        }

        $("#new_password").val("")
        $("#confirm_password").val("")
        $("#old_password").val("")

      },
      error: function (error) {
        console.error("Erro ao alterar senha:", error);
        $("#errorMessages").html("Erro ao alterar senha. Tente novamente mais tarde.");
        $("#errorMessages").show();
      }
    });
  });


  var navItems = $('.admin-menu li > a');
  var navListItems = $('.admin-menu li');
  var allWells = $('.admin-content');
  var allWellsExceptFirst = $('.admin-content:not(:first)');
  allWellsExceptFirst.hide();

  navItems.click(function (e) {
    e.preventDefault();
    navListItems.removeClass('active');
    $(this).closest('li').addClass('active');
    allWells.hide();
    var target = $(this).attr('data-target-id');
    $('#' + target).show();
  });

  $('#logout-link').click(function () {

    var confirmLogout = confirm("Deseja realmente fazer logout?");
    if (confirmLogout) {

      window.location.href = $(this).attr('href');
    } else {
      $('#profile').show();
      navListItems.removeClass('active');
    }
  });
});

