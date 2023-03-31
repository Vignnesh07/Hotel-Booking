// --------------- Table --------------------------------
// Get DOM elements
const select = document.getElementById("entries-per-page");
const table = document.getElementById("my-table");
const previousButton = document.getElementById("previous");
const nextButton = document.getElementById("next");
const pageNumberDiv = document.getElementById("page-numbers");
const searchButton = document.querySelector(".search-btn");
const searchInput = document.querySelector(".search-bar");
function getTableRows() {
    return table.querySelectorAll("tbody tr");
}

// Initialize variables
let currentPage = 1;
let rowsPerPage = parseInt(select.value);
let totalPages = Math.ceil(getTableRows().length / rowsPerPage);
let searchInputValue = "";

// Update the table when the page loads
updateTable(currentPage, rowsPerPage);

// Add event listeners
previousButton.addEventListener("click", () => {
    currentPage--;
    updateTable(currentPage, rowsPerPage, searchInputValue.toLowerCase());
});

nextButton.addEventListener("click", () => {
    currentPage++;
    updateTable(currentPage, rowsPerPage, searchInputValue.toLowerCase());
});

select.addEventListener("change", () => {
    rowsPerPage = parseInt(select.value);
    totalPages = Math.ceil(getTableRows().length / rowsPerPage);
    currentPage = 1;
    updateTable(currentPage, rowsPerPage);
});

searchButton.addEventListener("click", () => {
    searchInputValue = searchInput.value.trim().toLowerCase();
    currentPage = 1;
    updateTable(currentPage, rowsPerPage, searchInputValue);
});

function updateTable(currentPage, rowsPerPage, searchInputValue = "") {
    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;
    const rowsToDisplay = [];
    let counter = 0;
    let totalSearchResults = 0;
    // Loop through the table rows
    for (let i = 0; i < getTableRows().length; i++) {
        const row = getTableRows()[i];
        const columns = row.querySelectorAll("td");
        // Search functionality
        if (searchInputValue !== "") {
            let foundMatch = false;
            // Loop through the columns
            for (let j = 0; j < columns.length; j++) {
                const column = columns[j];
                // Check if the searchInputValue matches any column value
                if (
                    column.textContent.toLowerCase().includes(searchInputValue)
                ) {
                    foundMatch = true;
                    break;
                }
            }
            // Hide row if no match found
            if (!foundMatch) {
                row.style.display = "none";
                continue;
            }
        }

        totalSearchResults++; // Increment the total search results count
        counter++;
        // Hide rows that are not in the current page
        if (counter > endIndex) {
            row.style.display = "none";
            continue;
        }
        if (counter <= startIndex) {
            row.style.display = "none";
            continue;
        }
        // Show rows in the current page
        row.style.display = "";
        rowsToDisplay.push(row);
    }

    // Update the totalPages calculation based on total search results
    totalPages = Math.ceil(totalSearchResults / rowsPerPage);

    // Update page number display and button states
    if (rowsToDisplay.length === 0) {
        pageNumberDiv.innerHTML = "No results found";
        nextButton.disabled = true; // disable next button when there are no search results
    } else {
        pageNumberDiv.innerHTML = `Page ${currentPage} of ${totalPages}`;
        nextButton.disabled = currentPage === totalPages;
    }

    previousButton.disabled = currentPage === 1;

    if (totalPages === 0) {
        pageNumberDiv.innerHTML = "";
        nextButton.disabled = true; // disable next button when totalPages is 0
    }

    // Check if the rowsToDisplay array is empty and update the pageNumberDiv
    if (rowsToDisplay.length === 0) {
        pageNumberDiv.innerHTML = "No results found";
    }
}

// --------------- Button Actions --------------------------------
const bookedBtns = document.querySelectorAll(".booked-btn");
const payBtns = document.querySelectorAll(".pay-btn");
const historyBtns = document.querySelectorAll(".history-btn");


function disableEditBtn(row) {
    const editBtn = row.querySelector(".editBtn");
    editBtn.disabled = true;
    editBtn.style.opacity = "0.5";
    editBtn.style.cursor = "not-allowed";
}


function generateTableRows() {
    const bookings = JSON.parse(localStorage.getItem("bookings")) || [];
    const tbody = document.querySelector("#my-table tbody");
    tbody.innerHTML = ""; // Clear the tbody to avoid duplicate rows when regenerating the table

    // Sort the bookings by check-in date
    bookings.sort((a, b) => new Date(a.checkInDate) - new Date(b.checkInDate));

    bookings.forEach((booking) => {
        const newRow = document.createElement("tr");

        newRow.innerHTML = `
            <td class="column1">${booking.bookingId}</td>
            <td class="column2">${booking.roomNumber}</td>
            <td class="column3">${
                booking.roomType === "single"
                ? "Single Room"
                : booking.roomType === "double"
                ? "Double Room"
                : booking.roomType === "triple"
                ? "Triple Room"
                : booking.roomType === "queen"
                ? "Queen Room"
                : booking.roomType === "king"
                ? "King Room"
                : booking.roomType === "studio"
                ? "Studio Room"
                : booking.roomType === "executive"
                ? "Executive Suite"
                : "Presidential Suite"
            }</td>
            <td class="column4">${booking.status === "history" ? "<button class='history-btn bookings-btn'>History</button>": "<button class='booked-btn bookings-btn'>Booked</button>"}</td>
            <td class="column5">${booking.checkInDate}</td>
            <td class="column6">${booking.checkOutDate}</td>
            <td class="column7">${
                booking.status === "history"
                ? "-"
                : "<button class='pay-btn bookings-btn'>Pay</button>"
            }</td>
            <td class="column8">
                <div class="actions">
                <button class="editBtn"><i class="fa-solid fa-pen-to-square"></i></button>
                <button class="viewBtn"><i class="fa-solid fa-eye"></i></button>
                <button class="delete-btn"><i class="fa-sharp fa-solid fa-trash"></i></button>
                </div>
            </td>`
        ;

        if (booking.status === "history") {
            disableEditBtn(newRow);
        }

        tbody.appendChild(newRow);
    });
}
document.addEventListener("DOMContentLoaded", () => {
    generateTableRows();
    updateTable(currentPage, rowsPerPage);
});


document.querySelector("#my-table").addEventListener("click", (event) => {
    if (event.target.closest(".delete-btn")) {
        const rowToDelete = event.target.closest("tr");
        const bookingId = rowToDelete.querySelector(".column1").textContent;

        let bookings = JSON.parse(localStorage.getItem("bookings"));
        bookings = bookings.filter((booking) => booking.bookingId !== bookingId);
        localStorage.setItem("bookings", JSON.stringify(bookings));
        rowToDelete.remove();
        generateTableRows();
        updateTable(currentPage, rowsPerPage);
    }
});

document.querySelector("#my-table").addEventListener("click", (event) => {
    if (event.target.closest(".editBtn")) {
        const bookingId = event.target.closest("tr").querySelector(".column1").textContent;
        openEditOverlay(bookingId);
    }
    if (event.target.closest(".viewBtn")) {const bookingId = event.target.closest("tr").querySelector(".column1").textContent;
        openViewOverlay(bookingId);
    }
    if (event.target.closest(".history-btn")) {const bookingId = event.target.closest("tr").querySelector(".column1").textContent;
        openHistoryOverlay(bookingId);
    }
});

function openEditOverlay(bookingId) {
    const booking = getBookingById(bookingId);
    const editBtn = document.querySelector(`[data-booking-id="${bookingId}"] .editBtn`);
    
    if (booking && !editBtn.disabled) {
        document.querySelector("#editPopup #popup-fname-label").textContent = `First Name: ${booking.fName}`;
        document.querySelector("#editPopup #popup-lname-label").textContent = `Last Name: ${booking.lName}`;
        document.querySelector("#editPopup #popup-idcard-label").textContent = `ID Card Number: ${booking.idCard}`;
        document.querySelector("#editPopup #popup-email-label").textContent = `Email Address: ${booking.emailAddress}`;
        document.querySelector("#editPopup #popup-phonenumber-label").textContent = `Phone Number: +${booking.phoneNumber}`;
        document.querySelector("#editPopup #popup-residentialaddress-label").textContent = `Residential Address: ${booking.residentialAddress}`;
        document.querySelector("#editPopup #popup-city-label").textContent = `City: ${booking.city}`;
        document.querySelector("#editPopup #popup-zipcode-label").textContent = `Zip Code: ${booking.zipCode}`;

        document.querySelector("#editOverlay").style.display = "block";
        document.querySelector("#editOverlay").dataset.bookingId = bookingId; // Store the bookingId
    }
}

function openViewOverlay(bookingId) {
    const booking = getBookingById(bookingId);
    if (booking) {
        document.querySelector("#viewPopup #popup-customername").textContent = `Customer Name: ${booking.fName} ${booking.lName}`;
        document.querySelector("#viewPopup #popup-idcardnumber").textContent = `ID Card Number: ${booking.idCard}`;
        document.querySelector("#viewPopup #popup-emailaddress").textContent = `Email Address: ${booking.emailAddress}`;
        document.querySelector("#viewPopup #popup-phonenumber").textContent = `Phone Number: +${booking.phoneNumber}`;
        document.querySelector("#viewPopup #popup-residentialaddress").textContent = `Residential Address: ${booking.residentialAddress}`;
        document.querySelector("#viewPopup #popup-city").textContent = `City: ${booking.city}`;
        document.querySelector("#viewPopup #popup-zipcode").textContent = `Zip Code: ${booking.zipCode}`;
        document.querySelector("#viewPopup #popup-amount").textContent = `Total Amount: $${booking.amount}`;
        document.querySelector("#viewOverlay").style.display = "block";
    }
}

function openHistoryOverlay(bookingId) {
    const booking = getBookingById(bookingId);
    if (booking) {
        document.querySelector("#historyPopup #popup-customername").textContent = `Customer Name: ${booking.fName} ${booking.lName}`;
        document.querySelector("#historyPopup #popup-roomtype").textContent = `Room Type: ${
            booking.roomType === "single"
            ? "Single Room"
            : booking.roomType === "double"
            ? "Double Room"
            : booking.roomType === "triple"
            ? "Triple Room"
            : booking.roomType === "queen"
            ? "Queen Room"
            : booking.roomType === "king"
            ? "King Room"
            : booking.roomType === "studio"
            ? "Studio Room"
            : booking.roomType === "executive"
            ? "Executive Suite"
            : "Presidential Suite"
        }`;
        document.querySelector("#historyPopup #popup-roomnumber").textContent = `Room Number: ${booking.roomNumber}`;
        document.querySelector("#historyPopup #popup-checkindate").textContent = `Check In: ${booking.checkInDate}`;
        document.querySelector("#historyPopup #popup-checkoutdate").textContent = `Check Out: ${booking.checkOutDate}`;
        document.querySelector("#historyPopup #popup-stays").textContent = `Total Stays: ${booking.totalStays} Nights`;
        document.querySelector("#historyPopup #popup-prices").textContent = `Prices: $${booking.prices} x ${booking.totalStays} Nights`;
        document.querySelector("#historyPopup #popup-amount").textContent = `Total Amount: $${booking.amount}`;
        document.querySelector("#historyOverlay").style.display = "block";
    }
}

function closeEditOverlay() {
    document.querySelector("#editOverlay").style.display = "none";
}

function closeViewOverlay() {
    document.querySelector("#viewOverlay").style.display = "none";
}

function closeHistoryOverlay() {
    document.querySelector("#historyOverlay").style.display = "none";
}

function getBookingById(bookingId) {
    const bookings = JSON.parse(localStorage.getItem("bookings")) || [];
    return bookings.find((booking) => booking.bookingId === bookingId);
}

document.querySelector("#editSaveBtn").addEventListener("click", () => {
    const bookingId = document.querySelector("#editOverlay").dataset.bookingId;
    let bookings = JSON.parse(localStorage.getItem("bookings"));

    const index = bookings.findIndex(
        (booking) => booking.bookingId === bookingId
    );
    if (index !== -1) {
        const fnameInput = document.querySelector("#editPopup #popup-fname-input");
        const lnameInput = document.querySelector("#editPopup #popup-lname-input");
        const idCardInput = document.querySelector("#editPopup #popup-idcard-input");
        const emailAddressInput = document.querySelector("#editPopup #popup-email-input");
        const phoneNumberInput = document.querySelector("#editPopup #popup-phonenumber-input");
        const residentialAddressInput = document.querySelector("#editPopup #popup-residentialaddress-input");
        const cityInput = document.querySelector("#editPopup #popup-city-input");
        const zipCodeInput = document.querySelector("#editPopup #popup-zipcode-input");
        
        // Check which fields were edited and update only those fields

        if (fnameInput.style.display !== "none" && fnameInput.value !== "") {
                bookings[index].fName = fnameInput.value;
            toggleEdit("fname"); 
        }
        if (lnameInput.style.display !== "none" && lnameInput.value !== "") {
                bookings[index].lName = lnameInput.value;
            toggleEdit("lname"); 
        }
        if (idCardInput.style.display !== "none" && idCardInput.value !== "") {
            bookings[index].idCard = idCardInput.value;
            toggleEdit("idcard"); 
        }
        if (emailAddressInput.style.display !== "none" && emailAddressInput.value !== "") {
            bookings[index].emailAddress = emailAddressInput.value;
            toggleEdit("email"); 
        }
        if (phoneNumberInput.style.display !== "none" && phoneNumberInput.value !== "") {
            bookings[index].phoneNumber = Number(phoneNumberInput.value);
            toggleEdit("phonenumber"); 
        }
        if (residentialAddressInput.style.display !== "none" && residentialAddressInput.value !== "") {
            bookings[index].residentialAddress = residentialAddressInput.value;
            toggleEdit("residentialaddress"); 
        }
        if (cityInput.style.display !== "none" && cityInput.value !== "") {
            bookings[index].city = cityInput.value;
            toggleEdit("city"); 
        }
        if (zipCodeInput.style.display !== "none" && zipCodeInput.value !== "") {
            bookings[index].zipCode = zipCodeInput.value;
            toggleEdit("zipcode"); 
        }

        localStorage.setItem("bookings", JSON.stringify(bookings));
    }

    closeEditOverlay();
});


function resetEditOverlay() {

    const fnameInput = document.querySelector("#editPopup #popup-fname-input");
    const lnameInput = document.querySelector("#editPopup #popup-lname-input");
    const idCardInput = document.querySelector("#editPopup #popup-idcard-input");
    const emailAddressInput = document.querySelector("#editPopup #popup-email-input");
    const phoneNumberInput = document.querySelector("#editPopup #popup-phonenumber-input");
    const residentialAddressInput = document.querySelector("#editPopup #popup-residentialaddress-input");
    const cityInput = document.querySelector("#editPopup #popup-city-input");
    const zipCodeInput = document.querySelector("#editPopup #popup-zipcode-input");


    const fnameLabel = document.querySelector("#editPopup #popup-fname-label");
    const lnameLabel = document.querySelector("#editPopup #popup-lname-label");
    const idCardLabel = document.querySelector("#editPopup #popup-idcard-label");
    const emailAddressLabel = document.querySelector("#editPopup #popup-email-label");
    const phoneNumberLabel = document.querySelector("#editPopup #popup-phonenumber-label");
    const residentialAddressLabel = document.querySelector("#editPopup #popup-residentialaddress-label");
    const cityLabel = document.querySelector("#editPopup #popup-city-label");
    const zipCodeLabel = document.querySelector("#editPopup #popup-zipcode-label");


    fnameLabel.style.display = "inline";
    fnameInput.style.display = "none";
    fnameInput.value = fnameLabel.textContent.split(": ")[1];

    idCardLabel.style.display = "inline";
    idCardInput.style.display = "none";
    idCardInput.value = idCardLabel.textContent.split(": ")[1];

    lnameLabel.style.display = "inline";
    lnameInput.style.display = "none";
    lnameInput.value = lnameLabel.textContent.split(": ")[1];

    emailAddressLabel.style.display = "inline";
    emailAddressInput.style.display = "none";
    emailAddressInput.value = emailAddressLabel.textContent.split(": ")[1];

    phoneNumberLabel.style.display = "inline";
    phoneNumberInput.style.display = "none";
    phoneNumberInput.value = phoneNumberLabel.textContent.split(": ")[1];

    residentialAddressLabel.style.display = "inline";
    residentialAddressInput.style.display = "none";
    residentialAddressInput.value = residentialAddressLabel.textContent.split(": ")[1];

    cityLabel.style.display = "inline";
    cityInput.style.display = "none";
    cityInput.value = cityLabel.textContent.split(": ")[1];

    zipCodeLabel.style.display = "inline";
    zipCodeInput.style.display = "none";
    zipCodeInput.value = zipCodeLabel.textContent.split(": ")[1];

}


document.querySelector("#editCancelBtn").addEventListener("click", () => {
    resetEditOverlay();
    closeEditOverlay();
});

document.querySelector("#viewCloseBtn").addEventListener("click", () => {
    closeViewOverlay();
});
document.querySelector("#historyCloseBtn").addEventListener("click", () => {
    closeHistoryOverlay();
});

// --------------- Toggle Edit --------------------------------

document.querySelector("#editFNameIcon").addEventListener("click", () => {
    toggleEdit("fname");
});
document.querySelector("#editLNameIcon").addEventListener("click", () => {
    toggleEdit("lname");
});
document.querySelector("#editIdCardIcon").addEventListener("click", () => {
    toggleEdit("idcard");
});
document.querySelector("#editEmailIcon").addEventListener("click", () => {
    toggleEdit("email");
});
document.querySelector("#editPhoneNumberIcon").addEventListener("click", () => {
    toggleEdit("phonenumber");
});
document.querySelector("#editResidentialAddressIcon").addEventListener("click", () => {
    toggleEdit("residentialaddress");
});
document.querySelector("#editCityIcon").addEventListener("click", () => {
    toggleEdit("city");
});
document.querySelector("#editZipCodeIcon").addEventListener("click", () => {
    toggleEdit("zipcode");
});



function toggleEdit(field) {
    const label = document.querySelector(`#editPopup #popup-${field}-label`);
    const input = document.querySelector(`#editPopup #popup-${field}-input`);

    label.style.display =
        label.style.display === "none" ? "inline" : "none";
    input.style.display =
        input.style.display === "none" ? "inline" : "none";
    input.value = label.textContent.split(": ")[1];
}


// --------------- Payment --------------------------------
// Add event listener to Pay buttons
document.querySelector("#my-table").addEventListener("click", (event) => {
    if (event.target.classList.contains("pay-btn")) {
        const payBtn = event.target;
        document.querySelector("#paymentConfirmationOverlay").style.display ="block";
        document.querySelector("#paymentConfirmationOverlay").dataset.rowIndex = payBtn.closest("tr").rowIndex; // Store the rowIndex
    }
});

document.querySelector("#confirmPaymentBtn").addEventListener("click", () => {
    const rowIndex = document.querySelector("#paymentConfirmationOverlay").dataset.rowIndex;
    const row = document.querySelector("#my-table").rows[rowIndex];

    row.querySelector(".column7").innerHTML = "-";
    row.querySelector(".column4").innerHTML ="<button class='history-btn bookings-btn'>History</button>";

    const bookingId = row.querySelector(".column1").textContent;
    let bookings = JSON.parse(localStorage.getItem("bookings"));
    const index = bookings.findIndex(
        (booking) => booking.bookingId === bookingId
    );

    if (index !== -1) {
        bookings[index].status = "history";
        localStorage.setItem("bookings", JSON.stringify(bookings));
    }

    disableEditBtn(row);

    document.querySelector("#paymentConfirmationOverlay").style.display = "none";
    
});

document.querySelector("#paymentCancelBtn").addEventListener("click", () => {
    document.querySelector("#paymentConfirmationOverlay").style.display = "none";
});


