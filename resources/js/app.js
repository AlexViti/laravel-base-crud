require('./bootstrap');
require('../views/lbc/assets/js/app')

import 'bootstrap';

const confirmationOverlay = document.getElementById('confirmation-overlay');

if (confirmationOverlay) {
  const confirmationForm = confirmationOverlay.querySelector('form');

  document.querySelectorAll('.btn-delete').forEach(button => {
    button.addEventListener('click', function() {
      confirmationForm.action = confirmationForm.dataset.base + '/' + this.dataset.id;
      confirmationOverlay.style.display = 'flex';
    });
  });

  confirmationOverlay.querySelector('.btn-cancel').addEventListener('click', () => {
    confirmationOverlay.style.display = 'none';
    confirmationForm.action = "";
  });
}
