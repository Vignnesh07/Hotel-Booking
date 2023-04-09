//For view more function
$(document).ready(function () {
    // Attach click event handler to view button
    $(".viewStaff").click(function () {
        // Get user id from data attribute
        var userId = $(this).data("user-id");
        // Make AJAX request to get user details
        $.ajax({
            url: "/admin/staff/" + userId,
            type: "GET",
            success: function (data) {
                // Populate viewStaff-overlay div with user details
                $("#staffName span").text(data.name);
                $("#staffEmail span").text(data.email);
                $("#staffAuthority span").text(data.role);
                $("#staffPhone span").text(data.phone);
                $("#staffAddress span").text(data.address);
                $("#staffCity span").text(data.city);
                $("#staffZipCode span").text(data.zipCode);

                // Show viewStaff-overlay div
                $("#viewStaff-overlay").show();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Handle error
                console.log("Error: " + errorThrown);
            },
        });
    });

    // Attach click event handler to close button
    $("#viewCloseBtn").click(function () {
        // Hide viewStaff-overlay div
        $("#viewStaff-overlay").hide();
    });
});
