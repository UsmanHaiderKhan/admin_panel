/************ portfolio.js******************* */
$(document).ready(function () {
  $(".del-portfolio").on("click", function () {
    if (confirm("Do You Want To Delete ?")) {
      var id = $(this).data("id");
      var element = this;

      $.ajax({
        url: "../../model/delete/portfolio.php",
        type: "post",
        data: { deletedId: id },
        success: function (data) {
          alert("Success");
          if (data == 1) {
            $(element).closest("tr").fadeOut();
          } else {
            alert("Error");
            $("#error-message").html("Can Not Delete Record.").slideDown();
            $("#success-message").slideUp();
          }
        },
      });
    }
  });
});

/************ team.js******************* */
$(document).ready(function () {
  $(".del-team").on("click", function () {
    if (confirm("Do You Want To Delete ?")) {
      var id = $(this).data("id");
      var element = this;

      $.ajax({
        url: "../../model/delete/team.php",
        type: "post",
        data: { deletedId: id },
        success: function (data) {
          alert("Success");
          if (data == 1) {
            $(element).closest("tr").fadeOut();
          } else {
            alert("Error");
            $("#error-message").html("Can Not Delete Record.").slideDown();
            $("#success-message").slideUp();
          }
        },
      });
    }
  });
});

/************ services.js******************* */
$(document).ready(function () {
  $(".del-services").on("click", function () {
    if (confirm("Do You Want To Delete ?")) {
      var id = $(this).data("id");
      var element = this;

      $.ajax({
        url: "../../model/delete/services.php",
        type: "post",
        data: { deletedId: id },
        success: function (data) {
          alert("Success");
          if (data == 1) {
            $(element).closest("tr").fadeOut();
          } else {
            alert("Error");
            $("#error-message").html("Can Not Delete Record.").slideDown();
            $("#success-message").slideUp();
          }
        },
      });
    }
  });
});

/************ testimonial.js******************* */
$(document).ready(function () {
  $(".del-testimonial").on("click", function () {
    if (confirm("Do You Want To Delete ?")) {
      var id = $(this).data("id");
      var element = this;

      $.ajax({
        url: "../../model/delete/testimonial.php",
        type: "post",
        data: { deletedId: id },
        success: function (data) {
          alert("Success");
          if (data == 1) {
            $(element).closest("tr").fadeOut();
          } else {
            alert("Error");
            $("#error-message").html("Can Not Delete Record.").slideDown();
            $("#success-message").slideUp();
          }
        },
      });
    }
  });
});
