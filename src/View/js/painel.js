$(document).ready(function () {
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
    }else{
      $('#profile').show();
      navListItems.removeClass('active');
    }
  });

});

