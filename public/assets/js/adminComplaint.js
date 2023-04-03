const resolveButtons = document.querySelectorAll('.resolve-btn');

resolveButtons.forEach(button => {
    button.addEventListener('click', () => {
      // display the viewStaff overlay
      const overlay = document.getElementById('resolve-overlay');
      overlay.style.display = 'block';
    });
});

const closeResolveButtons = document.querySelectorAll('#resolveCancelBtn');

closeResolveButtons.forEach(button => {
    button.addEventListener('click', () => {
      // display the editStaff overlay
      const overlay = document.getElementById('resolve-overlay');
      overlay.style.display = 'none';
    });
});

document.addEventListener('DOMContentLoaded', function () {
  const resetButton = document.querySelector('.resetComplaint');
  const form = document.getElementById('submitComplaintForm');

  resetButton.addEventListener('click', function (event) {
    event.preventDefault();
    form.reset();
  });
});