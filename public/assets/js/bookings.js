// --------------- View Customer Information --------------------------------
$(document).ready(function () {
    // Attach click event handler to view button
    $(".viewBtn").click(function () {
        // Get user id from data attribute
        var bookingId = $(this).data("booking-id");
        // Make AJAX request to get booking details
        $.ajax({
            url: "/bookings/" + bookingId,
            type: "GET",
            success: function (data) {
                // Populate viewOverlay div with booking details
                $("#popup-customername span").text(data.fName + ' ' + data.lName);
                $("#popup-idcardnumber span").text(data.idCard);
                $("#popup-emailaddress span").text(data.email);
                $("#popup-phonenumber span").text(data.phone);
                $("#popup-residentialaddress span").text(data.address);
                $("#popup-city span").text(data.city);
                $("#popup-zipcode span").text(data.zipCode);
                $("#popup-amount span").text(`RM ${data.bookingAmount}`);

                // Show viewOverlay div
                $("#viewOverlay").show();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Handle error
                console.log("Error: " + errorThrown);
                console.log("Text Status: " + textStatus);
            },
        });
    });

    // Attach click event handler to close button
    $("#viewCloseBtn").click(function () {
        // Hide viewStaff-overlay div
        $("#viewOverlay").hide();
    });
});



// --------------- View Booking History --------------------------------
$(document).ready(function () {
    // Attach click event handler to view button
    $(".history-btn").click(function () {
        // Get user id from data attribute
        var bookingId = $(this).data("booking-id");
        // Make AJAX request to get booking details
        $.ajax({
            url: "/bookings/" + bookingId,
            type: "GET",
            success: function (data) {
                var formattedDate = new Date(data.created_at).toISOString().slice(0, 19).replace('T', ' ');
                // Populate viewOverlay div with booking details
                $("#popup-bookedAt span").text(formattedDate);
                $("#popup-customername span").text(`${data.fName} ${data.lName}`);
                $("#popup-roomtype span").text(data.roomType);
                $("#popup-roomnumber span").text(data.roomNumber);
                $("#popup-checkindate span").text(data.checkInDate);
                $("#popup-checkoutdate span").text(data.checkOutDate);
                $("#popup-amount span").text(`RM ${data.bookingAmount}`);

                // Show viewOverlay div
                $("#historyOverlay").show();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Handle error
                console.log("Error: " + errorThrown);
                console.log("Text Status: " + textStatus);
            },
        });
    });

    // Attach click event handler to close button
    $("#historyCloseBtn").click(function () {
        // Hide viewStaff-overlay div
        $("#historyOverlay").hide();
    });
});