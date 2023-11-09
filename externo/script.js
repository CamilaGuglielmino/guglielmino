var menu = document.querySelector('.hamburger');

// method
function toggleMenu(event) {
  this.classList.toggle('is-active');
  document.querySelector(".menuppal").classList.toggle("is_active");
  event.preventDefault();
}

// event
menu.addEventListener('click', toggleMenu, false);


//el formulario se envia
alert('Usuario creado con éxito correctamente. Bienvenido');