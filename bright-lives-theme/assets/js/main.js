
const menuToggle = document.getElementById('menu-toggle');

menuToggle?.addEventListener('click', function() {
  document.getElementById('mobile-menu').classList.toggle('hidden');

  document.getElementById('icon-cross').classList.toggle('hidden');
  document.getElementById('icon-bars').classList.toggle('hidden');
});

const form = document.getElementById('mc-embedded-subscribe-form');
const emailInput = document.getElementById('mce-EMAIL');
const errorMessageDiv = document.getElementById('bright-lives-validation-errors');

if (!form || !emailInput || !errorMessageDiv) {
  console.error('Newsletter sign-up form validation not working because one or more of the required elements does not exist');
}

form.addEventListener('submit', function(event) {
  let valid = true;
  const errorMessages = [];

  errorMessageDiv.style.display = 'none';

  if (emailInput.value.trim() === '') {
    valid = false;
    errorMessages.push('Vul een e-mailadres in.');
  }

  // Check if email contains '@' and a domain extension
  const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
  if (!emailPattern.test(emailInput.value)) {
    valid = false;
    errorMessages.push('Email moet een "@" bevatten, en een domein extensie (bijvoorbeeld .nl).');
  }

  // If not valid, prevent form submission and show error message
  if (!valid) {
    errorMessageDiv.textContent = errorMessages[0];
    event.preventDefault(); // Prevent form from submitting
    errorMessageDiv.style.display = 'block'; // Show error message
  }
});
