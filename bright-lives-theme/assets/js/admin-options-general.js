
document.addEventListener('DOMContentLoaded', function() {
  const passwordInput = document.getElementById('bl_api_key_mollie_input');
  const toggleVisibility = document.getElementById('toggleVisibility');
  const visibilityIcon = document.getElementById('visibility_icon');

  toggleVisibility.addEventListener('change', function() {
    if (toggleVisibility.checked) {
      passwordInput.type = 'text';
      toggleIcon(visibilityIcon, true);
    } else {
      passwordInput.type = 'password';
      toggleIcon(visibilityIcon, false);
    }
  });

  visibilityIcon.addEventListener('click', function() {
    toggleVisibility.checked = !toggleVisibility.checked; // Toggle checkbox state
    toggleVisibility.dispatchEvent(new Event('change')); // Trigger change event
  });
});

function toggleIcon(element, inputHidden) {
  if (inputHidden) {
    element.classList.remove('dashicons-hidden');
    element.classList.add('dashicons-visibility');
  } else {
    element.classList.remove('dashicons-visibility');
    element.classList.add('dashicons-hidden');
  }
}
