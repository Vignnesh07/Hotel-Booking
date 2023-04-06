// // --------------- Table Pagination and Search -----------------

// // Get DOM elements for table pagination and search
// const select = document.getElementById("entries-per-page-bookings");
// const table = document.getElementById("bookings-table");
// const previousButton = document.getElementById("previous");
// const nextButton = document.getElementById("next");
// const pageNumberDiv = document.getElementById("page-numbers");
// const searchButton = document.getElementById("search-btn-bookings");
// const searchInput = document.getElementById("search-bar-bookings");

// // Function to get all table rows
// function getTableRows() {
//     return table.querySelectorAll("tbody tr");
// }

// // Initialize variables for pagination
// let currentPage = 1;
// let rowsPerPage = parseInt(select.value);
// let totalPages = Math.ceil(getTableRows().length / rowsPerPage);
// let searchInputValue = "";

// // Update the table when the page loads
// updateTable(currentPage, rowsPerPage);

// // Add event listeners for pagination and search
// previousButton.addEventListener("click", () => {
//     currentPage--;
//     updateTable(currentPage, rowsPerPage, searchInputValue.toLowerCase());
// });

// nextButton.addEventListener("click", () => {
//     currentPage++;
//     updateTable(currentPage, rowsPerPage, searchInputValue.toLowerCase());
// });

// select.addEventListener("change", () => {
//     rowsPerPage = parseInt(select.value);
//     totalPages = Math.ceil(getTableRows().length / rowsPerPage);
//     currentPage = 1;
//     updateTable(currentPage, rowsPerPage);
// });

// searchButton.addEventListener("click", () => {
//     searchInputValue = searchInput.value.trim().toLowerCase();
//     currentPage = 1;
//     updateTable(currentPage, rowsPerPage, searchInputValue);
// });

// // Function to update the table based on the current page, rows per page, and search input value
// // function updateTable(currentPage, rowsPerPage, searchInputValue = "") {
// //     const startIndex = (currentPage - 1) * rowsPerPage;
// //     const endIndex = startIndex + rowsPerPage;
// //     const rowsToDisplay = [];
// //     let counter = 0;
// //     let totalSearchResults = 0;
// //     // Loop through the table rows
// //     for (let i = 0; i < getTableRows().length; i++) {
// //         const row = getTableRows()[i];
// //         const columns = row.querySelectorAll("td");

// //         // Search functionality
// //         if (searchInputValue !== "") {
// //             let foundMatch = false;

// //             // Loop through the columns
// //             for (let j = 0; j < columns.length; j++) {
// //                 const column = columns[j];

// //                 // Check if the searchInputValue matches any column value
// //                 if (
// //                     column.textContent.toLowerCase().includes(searchInputValue)
// //                 ) {
// //                     foundMatch = true;
// //                     break;
// //                 }
// //             }

// //             // Hide row if no match found
// //             if (!foundMatch) {
// //                 row.style.display = "none";
// //                 continue;
// //             }
// //         }

// //         // Increment the total search results count
// //         totalSearchResults++; 
// //         counter++;

// //         // Hide rows that are not in the current page
// //         if (counter > endIndex) {
// //             row.style.display = "none";
// //             continue;
// //         }
// //         if (counter <= startIndex) {
// //             row.style.display = "none";
// //             continue;
// //         }
// //         // Show rows in the current page
// //         row.style.display = "";
// //         rowsToDisplay.push(row);
// //     }

// //     // Update the totalPages calculation based on total search results
// //     totalPages = Math.ceil(totalSearchResults / rowsPerPage);

// //     // Update page number display and button states
// //     if (rowsToDisplay.length === 0) {
// //         pageNumberDiv.innerHTML = "No results found";
// //         nextButton.disabled = true; // disable next button when there are no search results
// //     } else {
// //         pageNumberDiv.innerHTML = `Page ${currentPage} of ${totalPages}`;
// //         nextButton.disabled = currentPage === totalPages;
// //     }

// //     previousButton.disabled = currentPage === 1;

// //     if (totalPages === 0) {
// //         pageNumberDiv.innerHTML = "";
// //         nextButton.disabled = true; // disable next button when totalPages is 0
// //     }

// //     // Check if the rowsToDisplay array is empty and update the pageNumberDiv
// //     if (rowsToDisplay.length === 0) {
// //         pageNumberDiv.innerHTML = "No results found";
// //     }
// // }

// // --------------- Button Actions --------------------------------
// // Query DOM elements for buttons
// const bookedBtns = document.querySelectorAll(".booked-btn");
// const payBtns = document.querySelectorAll(".pay-btn");
// const deleteBtns = document.querySelectorAll(".delete-btn");
// const historyBtns = document.querySelectorAll(".history-btn");


// // Function to get booking by its ID from localStorage
// function getBookingById(bookingId) {
//     const bookings = JSON.parse(localStorage.getItem("bookings")) || [];
//     return bookings.find((booking) => booking.bookingId === bookingId);
// }

// // Function to disable the edit button in a row 
// function disableEditBtn(row) {
//     const editBtn = row.querySelector(".editBtn");
//     editBtn.disabled = true;
//     editBtn.style.opacity = "0.5";
//     editBtn.style.cursor = "not-allowed";
// }


// // Function to generate table rows with booking data
// function generateTableRows() {
//     const bookings = JSON.parse(localStorage.getItem("bookings")) || [];
//     const tbody = document.querySelector("#bookings-table tbody");
//     tbody.innerHTML = ""; // Clear the tbody to avoid duplicate rows when regenerating the table

//     // Sort the bookings by check-in date
//     bookings.sort((a, b) => new Date(a.checkInDate) - new Date(b.checkInDate));

//     // Iterate through the bookings and create a new row for each booking
//     bookings.forEach((booking) => {
//         const newRow = document.createElement("tr");

//         newRow.innerHTML = `
//             <td class="bookings-column1" id="c-bookings1">${booking.bookingId}</td>
//             <td class="bookings-column2" id="c-bookings2">${booking.roomNumber}</td>
//             <td class="bookings-column3" id="c-bookings3">${
//                 booking.roomType === "single"
//                 ? "Single Room"
//                 : booking.roomType === "double"
//                 ? "Double Room"
//                 : booking.roomType === "triple"
//                 ? "Triple Room"
//                 : booking.roomType === "queen"
//                 ? "Queen Room"
//                 : booking.roomType === "king"
//                 ? "King Room"
//                 : booking.roomType === "studio"
//                 ? "Studio Room"
//                 : booking.roomType === "executive"
//                 ? "Executive Suite"
//                 : "Presidential Suite"
//             }</td>
//             <td class="bookings-column4" id="c-bookings4">${booking.status === "history" ? "<button class='history-btn bookings-btn'>History</button>": "<button class='booked-btn bookings-btn'>Booked</button>"}</td>
//             <td class="bookings-column5" id="c-bookings5">${booking.checkInDate}</td>
//             <td class="bookings-column6" id="c-bookings6">${booking.checkOutDate}</td>
//             <td class="bookings-column7" id="c-bookings7">${
//                 booking.status === "history"
//                 ? "-"
//                 : "<button class='pay-btn bookings-btn'>Pay</button>"
//             }</td>
//             <td class="bookings-column8" id="c-bookings8">
//                 <div class="actions">
//                 <button class="editBtn"><i class="fa-solid fa-pen-to-square"></i></button>
//                 <button class="viewBtn"><i class="fa-solid fa-eye"></i></button>
//                 <button class="delete-btn"><i class="fa-sharp fa-solid fa-trash delete-btn"></i></button>
//                 </div>
//             </td>`
//         ;



//         tbody.appendChild(newRow);

//         // Disable the edit button if the booking status is "history"
//         if (booking.status === "history") {
//             disableEditBtn(newRow);
//         }
//     });
// }

// // Event listener for when the DOM is fully loaded
// document.addEventListener("DOMContentLoaded", () => {
//     // Generate table rows with booking data and update the table with pagination
//     generateTableRows();
//     updateTable(currentPage, rowsPerPage);
//     //navigate back to home/reservation
//     document.getElementById("backToReserve").addEventListener("click", function() {
//         window.location.href = "/reservation-form";
//     });
// });



// --------------- DELETE --------------------------------
// Add event listener to Delete buttons
document.querySelector("#bookings-table").addEventListener("click", (event) => {
    if (event.target.classList.contains("delete-btn")) {
        const deleteBtn = event.target;
        document.querySelector("#deleteConfirmationOverlay").style.display ="block";
        document.querySelector("#deleteConfirmationOverlay").dataset.rowIndex = deleteBtn.closest("tr").rowIndex; // Store the rowIndex
    }
});

// // Add event listener to confirm Delete table row with the selected booking id
// document.querySelector("#confirmDeleteBtn").addEventListener("click", () => {
//     const rowIndex = document.querySelector("#deleteConfirmationOverlay").dataset.rowIndex;
//     const row = document.querySelector("#bookings-table").rows[rowIndex];

//     const bookingId = row.querySelector("#c-bookings1").textContent;
//     let bookings = JSON.parse(localStorage.getItem("bookings"));
//     const index = bookings.findIndex(
//         (booking) => booking.bookingId === bookingId
//     );

//     if (index !== -1) {
//         bookings.splice(index, 1); // Remove the booking from the array
//         localStorage.setItem("bookings", JSON.stringify(bookings));
//         row.remove();
//         generateTableRows();
//         updateTable(currentPage, rowsPerPage);
//     }

//     document.querySelector("#deleteConfirmationOverlay").style.display = "none";
    
// });

// Add event listener to cancel Delete table row with the selected booking id
//just close the overlay
document.querySelector("#deleteCancelBtn").addEventListener("click", () => {
    document.querySelector("#deleteConfirmationOverlay").style.display = "none";
});





// // -------------------- View, History, Edit, --------------------------------

// // Add event listener to handle clicks on the bookings table
// document.querySelector("#bookings-table").addEventListener("click", (event) => {
//     // Check if the clicked element is the edit button or its child elements
//     if (event.target.closest(".editBtn")) {
//         // Get the booking ID from the row that contains the clicked button
//         const bookingId = event.target.closest("tr").querySelector("#c-bookings1").textContent;
//         openEditOverlay(bookingId);
//     }
//     if (event.target.closest(".viewBtn")) {const bookingId = event.target.closest("tr").querySelector("#c-bookings1").textContent;
//         openViewOverlay(bookingId);
//     }
//     if (event.target.closest(".history-btn")) {const bookingId = event.target.closest("tr").querySelector("#c-bookings1").textContent;
//         openHistoryOverlay(bookingId);
//     }
// });



// function openEditOverlay(bookingId) {
//     const booking = getBookingById(bookingId);
//     const editBtn = document.querySelector(`[data-booking-id="${bookingId}"] .editBtn`);
    
//     if (booking && booking.status !== "history") {
//         document.querySelector("#editPopup #popup-fname-label").querySelector('span').textContent= `${booking.fName}`;
//         document.querySelector("#editPopup #popup-lname-label").querySelector('span').textContent= `${booking.lName}`;
//         document.querySelector("#editPopup #popup-idcard-label").querySelector('span').textContent= `${booking.idCard}`;
//         document.querySelector("#editPopup #popup-email-label").querySelector('span').textContent= `${booking.emailAddress}`;
//         document.querySelector("#editPopup #popup-phonenumber-label").querySelector('span').textContent = `+${booking.phoneNumber}`;
//         document.querySelector("#editPopup #popup-residentialaddress-label").querySelector('span').textContent = `${booking.residentialAddress}`;
//         document.querySelector("#editPopup #popup-city-label").querySelector('span').textContent = `${booking.city}`;
//         document.querySelector("#editPopup #popup-zipcode-label").querySelector('span').textContent = `${booking.zipCode}`;

//         document.querySelector("#editOverlay").style.display = "block";
//         document.querySelector("#editOverlay").dataset.bookingId = bookingId; // Store the bookingId
//     }
// }

// function openViewOverlay(bookingId) {
//     const booking = getBookingById(bookingId);
//     if (booking) {
//         document.querySelector("#viewPopup #popup-customername").querySelector('span').textContent = `${booking.fName} ${booking.lName}`;
//         document.querySelector("#viewPopup #popup-idcardnumber").querySelector('span').textContent = `${booking.idCard}`;
//         document.querySelector("#viewPopup #popup-emailaddress").querySelector('span').textContent = `${booking.emailAddress}`;
//         document.querySelector("#viewPopup #popup-phonenumber").querySelector('span').textContent = `+${booking.phoneNumber}`;
//         document.querySelector("#viewPopup #popup-residentialaddress").querySelector('span').textContent = `${booking.residentialAddress}`;
//         document.querySelector("#viewPopup #popup-city").querySelector('span').textContent = `${booking.city}`;
//         document.querySelector("#viewPopup #popup-zipcode").querySelector('span').textContent = `${booking.zipCode}`;
//         document.querySelector("#viewPopup #popup-amount").querySelector('span').textContent = `$${booking.amount}`;
//         document.querySelector("#viewOverlay").style.display = "block";
//     }
// }

// // the overlay will only appear after finish payment, the booked will become history
// function openHistoryOverlay(bookingId) {
//     const booking = getBookingById(bookingId);
//     if (booking) {
//         document.querySelector("#historyPopup #popup-customername").querySelector('span').textContent = `${booking.fName} ${booking.lName}`;
//         document.querySelector("#historyPopup #popup-roomtype").querySelector('span').textContent = `${
//             booking.roomType === "single"
//             ? "Single Room"
//             : booking.roomType === "double"
//             ? "Double Room"
//             : booking.roomType === "triple"
//             ? "Triple Room"
//             : booking.roomType === "queen"
//             ? "Queen Room"
//             : booking.roomType === "king"
//             ? "King Room"
//             : booking.roomType === "studio"
//             ? "Studio Room"
//             : booking.roomType === "executive"
//             ? "Executive Suite"
//             : "Presidential Suite"
//         }`;

//         document.querySelector("#historyPopup #popup-roomnumber").querySelector('span').textContent = `${booking.roomNumber}`;
//         document.querySelector("#historyPopup #popup-checkindate").querySelector('span').textContent = `${booking.checkInDate}`;
//         document.querySelector("#historyPopup #popup-checkoutdate").querySelector('span').textContent = `${booking.checkOutDate}`;
//         document.querySelector("#historyPopup #popup-stays").querySelector('span').textContent = `${booking.totalStays} nights`;
//         document.querySelector("#historyPopup #popup-prices").querySelector('span').textContent = `$${booking.prices} x ${booking.totalStays} nights`;
//         document.querySelector("#historyPopup #popup-amount").querySelector('span').textContent = `$${booking.amount}`;

//         document.querySelector("#historyOverlay").style.display = "block";
//     }
// }

// function closeEditOverlay() {
//     document.querySelector("#editOverlay").style.display = "none";
// }

// function closeViewOverlay() {
//     document.querySelector("#viewOverlay").style.display = "none";
// }

// function closeHistoryOverlay() {
//     document.querySelector("#historyOverlay").style.display = "none";
// }



// // -------------------- Edit Save Button --------------------------------
// //edit save button is in the edit overlay to save modified input
// document.querySelector("#editSaveBtn").addEventListener("click", () => {
//     const bookingId = document.querySelector("#editOverlay").dataset.bookingId;
//     let bookings = JSON.parse(localStorage.getItem("bookings"));

//     const index = bookings.findIndex(
//         (booking) => booking.bookingId === bookingId
//     );
//     if (index !== -1) {
//         const fnameInput = document.querySelector("#editPopup #popup-fname-input");
//         const lnameInput = document.querySelector("#editPopup #popup-lname-input");
//         const idCardInput = document.querySelector("#editPopup #popup-idcard-input");
//         const emailAddressInput = document.querySelector("#editPopup #popup-email-input");
//         const phoneNumberInput = document.querySelector("#editPopup #popup-phonenumber-input");
//         const residentialAddressInput = document.querySelector("#editPopup #popup-residentialaddress-input");
//         const cityInput = document.querySelector("#editPopup #popup-city-input");
//         const zipCodeInput = document.querySelector("#editPopup #popup-zipcode-input");
        
//         // Check which fields were edited and update only those fields
//         if (fnameInput.style.display !== "none" && fnameInput.value !== "") {
//                 bookings[index].fName = fnameInput.value;
//             toggleEdit("fname"); 
//         }
//         if (lnameInput.style.display !== "none" && lnameInput.value !== "") {
//                 bookings[index].lName = lnameInput.value;
//             toggleEdit("lname"); 
//         }
//         if (idCardInput.style.display !== "none" && idCardInput.value !== "") {
//             bookings[index].idCard = idCardInput.value;
//             toggleEdit("idcard"); 
//         }
//         if (emailAddressInput.style.display !== "none" && emailAddressInput.value !== "") {
//             bookings[index].emailAddress = emailAddressInput.value;
//             toggleEdit("email"); 
//         }
//         if (phoneNumberInput.style.display !== "none" && phoneNumberInput.value !== "") {
//             bookings[index].phoneNumber = Number(phoneNumberInput.value);
//             toggleEdit("phonenumber"); 
//         }
//         if (residentialAddressInput.style.display !== "none" && residentialAddressInput.value !== "") {
//             bookings[index].residentialAddress = residentialAddressInput.value;
//             toggleEdit("residentialaddress"); 
//         }
//         if (cityInput.style.display !== "none" && cityInput.value !== "") {
//             bookings[index].city = cityInput.value;
//             toggleEdit("city"); 
//         }
//         if (zipCodeInput.style.display !== "none" && zipCodeInput.value !== "") {
//             bookings[index].zipCode = zipCodeInput.value;
//             toggleEdit("zipcode"); 
//         }

//         localStorage.setItem("bookings", JSON.stringify(bookings));
//     }

//     closeEditOverlay();
// });

//when click cancel, everything will reset back to its original state 
// like how you opened the edit, eventhough if u edited halfway
// function resetEditOverlay() {

//     const fnameInput = document.querySelector("#editPopup #popup-fname-input");
//     const lnameInput = document.querySelector("#editPopup #popup-lname-input");
//     const idCardInput = document.querySelector("#editPopup #popup-idcard-input");
//     const emailAddressInput = document.querySelector("#editPopup #popup-email-input");
//     const phoneNumberInput = document.querySelector("#editPopup #popup-phonenumber-input");
//     const residentialAddressInput = document.querySelector("#editPopup #popup-residentialaddress-input");
//     const cityInput = document.querySelector("#editPopup #popup-city-input");
//     const zipCodeInput = document.querySelector("#editPopup #popup-zipcode-input");


//     const fnameLabel = document.querySelector("#editPopup #popup-fname-label");
//     const lnameLabel = document.querySelector("#editPopup #popup-lname-label");
//     const idCardLabel = document.querySelector("#editPopup #popup-idcard-label");
//     const emailAddressLabel = document.querySelector("#editPopup #popup-email-label");
//     const phoneNumberLabel = document.querySelector("#editPopup #popup-phonenumber-label");
//     const residentialAddressLabel = document.querySelector("#editPopup #popup-residentialaddress-label");
//     const cityLabel = document.querySelector("#editPopup #popup-city-label");
//     const zipCodeLabel = document.querySelector("#editPopup #popup-zipcode-label");


//     fnameLabel.style.display = "inline";
//     fnameInput.style.display = "none";
//     fnameInput.value = fnameLabel.textContent.split(": ")[1];

//     idCardLabel.style.display = "inline";
//     idCardInput.style.display = "none";
//     idCardInput.value = idCardLabel.textContent.split(": ")[1];

//     lnameLabel.style.display = "inline";
//     lnameInput.style.display = "none";
//     lnameInput.value = lnameLabel.textContent.split(": ")[1];

//     emailAddressLabel.style.display = "inline";
//     emailAddressInput.style.display = "none";
//     emailAddressInput.value = emailAddressLabel.textContent.split(": ")[1];

//     phoneNumberLabel.style.display = "inline";
//     phoneNumberInput.style.display = "none";
//     phoneNumberInput.value = phoneNumberLabel.textContent.split(": ")[1];

//     residentialAddressLabel.style.display = "inline";
//     residentialAddressInput.style.display = "none";
//     residentialAddressInput.value = residentialAddressLabel.textContent.split(": ")[1];

//     cityLabel.style.display = "inline";
//     cityInput.style.display = "none";
//     cityInput.value = cityLabel.textContent.split(": ")[1];

//     zipCodeLabel.style.display = "inline";
//     zipCodeInput.style.display = "none";
//     zipCodeInput.value = zipCodeLabel.textContent.split(": ")[1];

// }


// document.querySelector("#editCancelBtn").addEventListener("click", () => {
//     resetEditOverlay();
//     closeEditOverlay();
// });

// document.querySelector("#viewCloseBtn").addEventListener("click", () => {
//     closeViewOverlay();
// });
// document.querySelector("#historyCloseBtn").addEventListener("click", () => {
//     closeHistoryOverlay();
// });

// // --------------- Toggle Edit --------------------------------

// document.querySelector("#editFNameIcon").addEventListener("click", () => {
//     toggleEdit("fname");
// });
// document.querySelector("#editLNameIcon").addEventListener("click", () => {
//     toggleEdit("lname");
// });
// document.querySelector("#editIdCardIcon").addEventListener("click", () => {
//     toggleEdit("idcard");
// });
// document.querySelector("#editEmailIcon").addEventListener("click", () => {
//     toggleEdit("email");
// });
// document.querySelector("#editPhoneNumberIcon").addEventListener("click", () => {
//     toggleEdit("phonenumber");
// });
// document.querySelector("#editResidentialAddressIcon").addEventListener("click", () => {
//     toggleEdit("residentialaddress");
// });
// document.querySelector("#editCityIcon").addEventListener("click", () => {
//     toggleEdit("city");
// });
// document.querySelector("#editZipCodeIcon").addEventListener("click", () => {
//     toggleEdit("zipcode");
// });


// // Function to toggle the display state of the label and input elements for a specific field
// function toggleEdit(field) {
//     // Select the label and input elements by their respective IDs
//     const label = document.querySelector(`#editPopup #popup-${field}-label`);
//     const input = document.querySelector(`#editPopup #popup-${field}-input`);

//     // Toggle the display state of the label&input element between "none" and "inline"
//     label.style.display = label.style.display === "none" ? "inline" : "none";
//     input.style.display = input.style.display === "none" ? "inline" : "none";

//      // Set the input value to the label's text content, excluding the field name
//     input.value = label.textContent.split(": ")[1];
// }


// --------------- Payment --------------------------------
// Add event listener to Pay buttons
document.querySelector("#bookings-table").addEventListener("click", (event) => {
    if (event.target.classList.contains("pay-btn")) {
        const payBtn = event.target;
        document.querySelector("#paymentConfirmationOverlay").style.display ="block";
        document.querySelector("#paymentConfirmationOverlay").dataset.rowIndex = payBtn.closest("tr").rowIndex; // Store the rowIndex
    }
});

// After clicking confirm payment button, the booked will become history and pay button will become "-"
// document.querySelector("#confirmPaymentBtn").addEventListener("click", () => {
//     const rowIndex = document.querySelector("#paymentConfirmationOverlay").dataset.rowIndex;
//     const row = document.querySelector("#bookings-table").rows[rowIndex];

//     row.querySelector("#c-bookings7").innerHTML = "-";
//     row.querySelector("#c-bookings4").innerHTML ="<button class='history-btn bookings-btn'>History</button>";

//     const bookingId = row.querySelector("#c-bookings1").textContent;
//     let bookings = JSON.parse(localStorage.getItem("bookings"));
//     const index = bookings.findIndex(
//         (booking) => booking.bookingId === bookingId
//     );

//     if (index !== -1) {
//         bookings[index].status = "history";
//         localStorage.setItem("bookings", JSON.stringify(bookings));
//         disableEditBtn(row); 
//     }

//     disableEditBtn(row);

//     document.querySelector("#paymentConfirmationOverlay").style.display = "none";
    
// });

document.querySelector("#paymentCancelBtn").addEventListener("click", () => {
    document.querySelector("#paymentConfirmationOverlay").style.display = "none";
});



// --------------- View Bookings --------------------------------
$(document).ready(function () {
    // Attach click event handler to view button
    $(".viewBtn").click(function () {
        // Get user id from data attribute
        var userId = $(this).data("user-id");
        // Make AJAX request to get booking details
        $.ajax({
            url: "/bookings/" + userId,
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
                $("#popup-amount span").text(data.amount);

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