document.querySelector(".addStaff").addEventListener("click", function () {
    document.querySelector(".staff-overlay").classList.add("active");
});

document.querySelector(".close-button").addEventListener("click", function () {
    document.querySelector(".staff-overlay").classList.remove("active");
});

// get all the editStaff buttons
const editStaffButtons = document.querySelectorAll(".editStaff");

// attach a click event listener to each editStaff button
editStaffButtons.forEach((button) => {
    button.addEventListener("click", () => {
        // display the editStaff overlay
        const overlay = document.getElementById("editStaff-overlay");
        overlay.style.display = "block";
    });
});

const closeButtons = document.querySelectorAll(".close-button");

closeButtons.forEach((button) => {
    button.addEventListener("click", () => {
        // display the editStaff overlay
        const overlay = document.getElementById("editStaff-overlay");
        overlay.style.display = "none";
    });
});

const viewButtons = document.querySelectorAll(".viewStaff");

viewButtons.forEach((button) => {
    button.addEventListener("click", () => {
        // display the viewStaff overlay
        const overlay = document.getElementById("viewStaff-overlay");
        overlay.style.display = "block";
    });
});

const closeViewButtons = document.querySelectorAll("#viewCloseBtn");

closeViewButtons.forEach((button) => {
    button.addEventListener("click", () => {
        // display the editStaff overlay
        const overlay = document.getElementById("viewStaff-overlay");
        overlay.style.display = "none";
    });
});