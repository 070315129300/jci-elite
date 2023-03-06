const elements = document.querySelector('.res-menu');
const icon = document.querySelector('#menu-icon');

icon.addEventListener('click', () => {
	elements.classList.toggle('active');
	icon.classList.toggle('active');
});
