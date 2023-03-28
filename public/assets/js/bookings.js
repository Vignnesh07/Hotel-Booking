// Get DOM elements
const select = document.getElementById("entries-per-page");
const table = document.getElementById("my-table");
const previousButton = document.getElementById("previous");
const nextButton = document.getElementById("next");
const pageNumberDiv = document.getElementById("page-numbers");
const searchButton = document.querySelector(".search-btn");
const searchInput = document.querySelector(".search-bar");
const tableRows = table.querySelectorAll("tbody tr");

// Initialize variables
let currentPage = 1;
let rowsPerPage = parseInt(select.value);
let totalPages = Math.ceil(tableRows.length / rowsPerPage);
let searchInputValue = "";

// Update the table when the page loads
updateTable(currentPage, rowsPerPage);

// Add event listeners
previousButton.addEventListener("click", () => {
    currentPage--;
    updateTable(currentPage, rowsPerPage, searchInput.value.toLowerCase());
});

nextButton.addEventListener("click", () => {
    currentPage++;
    updateTable(currentPage, rowsPerPage, searchInput.value.toLowerCase());
});

select.addEventListener("change", () => {
    rowsPerPage = parseInt(select.value);
    totalPages = Math.ceil(tableRows.length / rowsPerPage);
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
    for (let i = 0; i < tableRows.length; i++) {
        const row = tableRows[i];
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
