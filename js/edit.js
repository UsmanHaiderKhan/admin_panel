/**************************show edit table**********************/

$(document).ready(function () {
  $("#edit-portfolio").on("click", function () {
    window.location.replace("../edit/portfolio.php");

    // $("#model").show();
    var id = $(this).data("eid");
    alert(id);
    // $.ajax({
    //   URL: "../edit/portfolio.php",
    //   type: "POST",
    //   data: { editId: id },
    //   success: function (data) {
    //     $("#edit-form").html(data);
    //   },
    // });
  });
});

/************************on save btn *************/

$(document).ready(function () {
  $("#edit-submit").on("click", function () {
    var id = $("#edit-id").val();
    var port_image = $("#file");
    var heading = $("#your_summernote").val();
    var link = $("#edit-link").val();
    var description = $("#your1_summernote").val();
    $.ajax({
      URL: "../../model/edit/portfolio.php",
      type: "POST",
      data: {
        id: id,
        port_image: port_image,
        heading: heading,
        link: link,
        description: description,
      },
      success: function (data) {
        if (data == 1) {
          $("#model").hide();
        }
      },
    });
  });
});
