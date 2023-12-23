$("#appointmentType").change(function () {
    if ($(this).val() == "student") {
        $("#add_info").removeClass("d-none");
        $("#stud_no").attr("required", "");
    } else if ($(this).val() == "parent") {
        $("#add_info").removeClass("d-none");
        $("#stud_no").attr("required", "");
        $('[for="stud_no"]').append(' (for your child)');
    }
    else {
        $("#add_info").addClass("d-none");
        $("#stud_no").removeAttr("required");
    }

  
});

// $(document).ready(function () {
//     $('#datetimepicker').datetimepicker({
//       format: 'YYYY-MM-DD',
//       minDate: new Date(), // Disable previous months
//       daysOfWeekDisabled: [0, 5, 6], // Disable Sunday, Friday, and Saturday
//     });

//     $('#datetimepicker').on('change.datetimepicker', function (e) {
//       var selectedDate = e.date;
//       var currentDate = new Date();

//       if (selectedDate < currentDate) {
//         alert('Invalid date. Please select a future date.');
//         $('#selectedDate').val('');
//       }
//     });
//   });

$(document).ready(function () {
    // Get today's date
    var today = new Date();

    // Calculate tomorrow's date
    var tomorrow = new Date(today);
    tomorrow.setDate(today.getDate() + 1);

    // Format the date in 'YYYY-MM-DD' format
    var tomorrowFormatted = tomorrow.toISOString().split('T')[0];

    // Set the min attribute using jQuery
    $('#selectedDate').attr('min', tomorrowFormatted);


    // Validate if the user did not select F, S, and Su
    // Get the date input element
    var dateInput = $('#selectedDate');

    // Function to check if a day is Monday to Thursday
    function isAllowedDay(date) {
        var day = date.getDay();
        return day >= 1 && day <= 4; // Monday to Thursday
    }

    // Disable days other than Monday to Thursday
    dateInput.on('input', function () {
        var selectedDate = new Date($(this).val());
        if (!isAllowedDay(selectedDate)) {
            alert('Please select a date from Monday to Thursday.');
            $(this).val(''); // Clear the input if an invalid date is selected
        }
    });

});