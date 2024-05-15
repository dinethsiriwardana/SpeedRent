$(document).ready(function () {
  $.ajax({
    url: "php/car_order/car_order_details.php",
    method: "GET",
    data: { carId: carId },
    success: function (data, status) {
      $("#fromDate").html(data);
      $("#toDate").html(data);
    },
  });

  var fromDateValues = [];

  $("#error-alert").hide();

  $("#orderformoredayscheckbox").change(function () {
    if ($(this).is(":checked")) {
      $("#orderformoredays").prop("disabled", false);
      $("#fromDate option").each(function () {
        fromDateValues.push($(this).val());
      });
      //   console.log(fromDateValues);
    } else {
      $("#orderformoredays").prop("disabled", true);
    }
  });

  $("#fromDate, #orderformoredays, #collecttype, #returntype").change(
    calculateBill
  );

  var totalpriceelement = $("#totalprice");
  totalpriceelement.text("$" + totalprice + ".00");

  var orderForMoreDaysSelect = $("#orderformoredays");
  var fromDateSelect = $("#fromDate");
  // Attach the change event listener to the orderForMoreDays select box
  orderForMoreDaysSelect.on("change", function () {
    var fromDate = fromDateSelect.val();
    var orderForMoreDays = orderForMoreDaysSelect.val();

    var selectRange = getDateRange(fromDate, orderForMoreDays);
    if (areDatesInRange(selectRange, fromDateValues)) {
      console.log(selectRange.length); // or do something else with the valid range
    } else {
      console.log("The selected range is not valid");
      orderForMoreDaysSelect.prop("selectedIndex", 0);

      $("#error-alert")
        .fadeTo(5000, 2000)
        .slideUp(2000, function () {
          $("#error-alert").slideUp(2000);
        }); // or show an error message
    }
  });
  $("#btnrentnow").click(function () {
    toSavePhp();
  });
});

function getDateRange(startDate, endDate) {
  var datesInRange = [];
  var currentDate = new Date(startDate);
  while (currentDate <= new Date(endDate)) {
    datesInRange.push(currentDate.toISOString().slice(0, 10));
    currentDate.setDate(currentDate.getDate() + 1);
  }
  return datesInRange;
}

function areDatesInRange(datesRange, datesArray) {
  for (var i = 0; i < datesRange.length; i++) {
    if (!datesArray.includes(datesRange[i])) {
      return false;
    }
  }
  return true;
}

var orderformoredayscheckbox = document.getElementById(
  "orderformoredayscheckbox"
);

orderformoredayscheckbox.addEventListener("change", function (event) {
  if (!this.checked) {
    $("#orderformoredays").val($("#fromDate").val());
    calculateBill();
  }
});
function calculateBill() {
  var fromDate = $("#fromDate").val();
  var toDate = $("#orderformoredays").val();
  var collect = $("#collecttype").val();
  var returnOption = $("#returntype").val();

  var addtototalprice = 0;

  if ((collect === "delivery") !== (returnOption === "delivery")) {
    addtototalprice = 25;
  } else if (collect === "delivery" && returnOption === "delivery") {
    addtototalprice = 40;
  }

  var selectRange = getDateRange(fromDate, toDate);

  var totalpriceelement = $("#totalprice");
  calculateTotalBill =
    totalprice + addtototalprice + (selectRange.length - 1) * totalprice * 0.5;
  // console.log(calculateTotalBill);
  totalpriceelement.text(
    "$" +
      (totalprice +
        addtototalprice +
        (selectRange.length - 1) * totalprice * 0.5) +
      ".00"
  );
}

function toSavePhp() {
  var fromDate = $("#fromDate").val();
  var toDate = $("#orderformoredays").val();
  var collect = $("#collecttype").val();
  var returnOption = $("#returntype").val();
  $.ajax({
    url: "php/car_order/savedata.php",
    method: "POST",
    data: {
      carid: carId,
      date_from: fromDate,
      date_to: toDate,
      pickup_type: collect,
      return_type: returnOption,
      stts: "Pending",
      stts_details: "",
      price: calculateTotalBill,
      payment: "Null",
    },
    success: function (data, status) {
      // Handle success response here
      console.log(status);
      window.location.reload();
    },
    error: function (xhr, status, error) {
      // Handle error response here
      console.error("Error: " + error);
    },
  });
}
