const $button  = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');
const $overlay = document.querySelector('#overlay');

$button.addEventListener('click', (e) => {
  e.preventDefault();
  $wrapper.classList.toggle('toggled');
  $overlay.style.display = $wrapper.classList.contains('toggled') ? 'block' : 'none';
});

$overlay.addEventListener('click', (e) => {
  $wrapper.classList.remove('toggled');
  $overlay.style.display = 'none';
});



