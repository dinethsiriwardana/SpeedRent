$(document).ready(function () {
  // $("#fromDate").click(function(event){  // For Get data

  // var formdata = $("#formadddata").serialize();
  // console.log(formdata);
  $.get("php/car_order/car_order_details.php", function (data, status) {
    $("#fromDate").html(data);
  });
  $.get("php/car_order/car_order_details.php", function (data, status) {
    $("#toDate").html(data);
  });
  // });
  // var select = document.getElementById
  // console.log("ss");
});

// const checkbox = document.getElementById('orderformoredayscheckbox');
// const select = document.getElementById('orderformoredays');
// select.disabled;

// checkbox.addEventListener('change', function() {
//     select.disabled = !checkbox.checked;
// });

$(document).ready(function () {
  $("#orderformoredayscheckbox").change(function () {
    if ($(this).is(":checked")) {
    
      $("#fromDate").prop("disabled", false);
      var fromDateValues = [];
      $("#fromDate option").each(function () {
        fromDateValues.push($(this).val());
      });
      console.log(fromDateValues);
    } else {
      $("#fromDate").prop("disabled", true);
    }
  });
});
