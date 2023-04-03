document.addEventListener('DOMContentLoaded', function () {
  const resetButton = document.querySelector('.resetComplaint');
  const form = document.getElementById('submitComplaintForm');

  resetButton.addEventListener('click', function (event) {
    event.preventDefault();
    form.reset();
  });
});