// this is for checkbox agreement while submittting form

$(document).ready(function() {
  $("#confirmsave").click(function() {
    //check if checkbox is checked
    if ($(this).is(":checked")) {
      $("#saveactivity").removeAttr("disabled"); //enable input
    } else {
      $("#saveactivity").attr("disabled", true); //disable input
    }
  });
});

$(document).ready(function() {
  // var due_amt = 0;

  $("#paid_amount").keyup(function() {
    var total_amount = parseFloat($("#total_amount").val());
    var advance_amount = parseFloat($("#advance_amount").val());
    var discount_amount = parseFloat($("#discount_amount").val());
    var paid_amount = parseFloat($("#paid_amount").val());

    due_amt = parseFloat(
      total_amount - advance_amount - paid_amount - discount_amount
    );
    console.log(due_amt);
    $("#due_amount").val(due_amt);
  });
});

$("#discount_amount").keyup(function() {
  var total_amount = parseFloat($("#total_amount").val());
  var advance_amount = parseFloat($("#advance_amount").val());
  var discount_amount = parseFloat($("#discount_amount").val());
  var paid_amount = parseFloat($("#paid_amount").val());

  due_amt = parseFloat(
    total_amount - advance_amount - paid_amount - discount_amount
  );
  parseFloat(due_amt);

  console.log("due is ".due_amt);

  $("#due_amount").val(due_amt);

  if (discount_amount > total_amount) {
    $("#discount_amount").val(0);
  }
});
