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
                $("#staffAuthority span").text(data.authority);
                $("#staffSalary span").text(data.salary);
                $("#staffPhone span").text(data.phone);
                $("#staffAddress span").text(data.address);
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

//For update function to allow users to view more information
$(document).ready(function () {
    // Attach click event handler to view button
    $(".editStaff").click(function () {
        // Get user id from data attribute
        var userId = $(this).data("user-id");
        // Make AJAX request to get user details
        $.ajax({
            url: "/admin/staff/" + userId,
            type: "GET",
            success: function (data) {
                console.log(data);
                $("#editStaff-overlay").show();
                $("#editStaffForm input[name='name']").val(data.name);
                $("#editStaffForm input[name='email']").val(data.email);
                $("#editStaffForm select[name='authority']").val(
                    data.authority
                );
                $("#editStaffForm input[name='salary']").val(data.salary);
                $("#editStaffForm input[name='phone']").val(data.phone);
                $("#editStaffForm input[name='address']").val(data.address);
                $("#editStaffForm input[name='zipCode']").val(data.zipCode);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Handle error
                console.log("Error: " + errorThrown);
            },
        });
    });

    // Attach click event handler to close button
    $(".close-button").click(function () {
        // Hide editStaff-overlay div
        $("#editStaff-overlay").hide();
    });

    // Attach submit event handler to the form
    $("#editStaffForm").submit(function (event) {
        // Prevent the default form submission behavior
        event.preventDefault();
        // Get the staff ID from the form action attribute
        var staffId = $(this).attr("action").split("/").pop();
        console.log(staffId);
        // Make AJAX request to submit the form with the staff ID in the URL
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                // Handle success
                console.log("Form submitted successfully");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Handle error
                console.log("Error: " + errorThrown);
            },
        });
    });
});
