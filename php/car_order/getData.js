$(document).ready(function () {

  $.get("php/car_order/car_order_details.php", function (data, status) {
    $("#fromDate").html(data);
  });
  $.get("php/car_order/car_order_details.php", function (data, status) {
    $("#toDate").html(data);
  });

});



var fromDateValues = [];
$(document).ready(function () {
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
});

$('#orderformoredays').change(function() {
    var orderForMoreDaysSelect = $('#orderformoredays');
    var fromDateSelect = $('#fromDate');
    // console.log("orderForMoreDaysSelect chaned");

    var fromDate = fromDateSelect.val();
    var orderForMoreDays = orderForMoreDaysSelect.val();
    // console.log(fromDateSelect.val());
    
    var selectRange = getDateRange(fromDate, orderForMoreDays);
      if (areDatesInRange(selectRange, fromDateValues)) {
        console.log(selectRange); // or do something else with the valid range
      } else {
        console.log('The selected range is not valid'); 
        $("#error-alert").fadeTo(5000, 2000).slideUp(2000, function() {
            $("#error-alert").slideUp(2000);
          });// or show an error message
      }
    
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
  
  // Define a function to check if all dates in a range are included in the dates array
  function areDatesInRange(datesRange, datesArray) {
    for (var i = 0; i < datesRange.length; i++) {
      if (!datesArray.includes(datesRange[i])) {
        return false;
      }
    }
    return true;
  }