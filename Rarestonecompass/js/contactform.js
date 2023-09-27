document.addEventListener('DOMContentLoaded', function () {
  const openPopupButton = document.getElementById('openPopup');
  const closePopupButton = document.getElementById('closePopup');
  const contactPopup = document.getElementById('contactPopup');

  openPopupButton.addEventListener('click', function () {
      contactPopup.style.display = 'block';
  });

  closePopupButton.addEventListener('click', function () {
      contactPopup.style.display = 'none';
  });
});
