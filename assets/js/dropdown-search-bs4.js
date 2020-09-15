$(".dropdown-search-input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu a").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });