// script.js
function selectPayment(paymentMethod) {
    document.getElementById('selected-payment').innerHTML = 'Método de pago seleccionado: ' + paymentMethod;
}


// Servicios

// Obtener los elementos select
let primerSelect = document.getElementById('primerSelect');
let segundoSelect = document.getElementById('segundoSelect');
let tercerSelect = document.getElementById('tercerSelect');
let cuartoSelect = document.getElementById('cuartoSelect');
let quintoSelect = document.getElementById('quintoSelect');
let otra = document.getElementById('otra');

let contenedorSegundoSelect = document.getElementById('contenedorSegundoSelect');
let contenedorTercerSelect = document.getElementById('contenedorTercerSelect');
let contenedorCuartoSelect = document.getElementById('contenedorCuartoSelect');
let contenedorQuintoSelect = document.getElementById('contenedorQuintoSelect');
let contenedorOtra = document.getElementById('contenedorOtra');

// Función para actualizar la visibilidad y opciones de los sub-selects
function actualizarSubSelects() {
  // Obtener el valor seleccionado del primer select
  let opcionSeleccionada = primerSelect.value;

  // Ocultar todos los sub-selects
  contenedorSegundoSelect.style.display = 'none';
  contenedorTercerSelect.style.display = 'none';
  contenedorCuartoSelect.style.display = 'none';
  contenedorQuintoSelect.style.display = 'none';
  contenedorOtra.style.display = 'none';
  

  // Mostrar el sub-select correspondiente a la opción seleccionada
  if (opcionSeleccionada !== 'default') {
    switch (opcionSeleccionada) {
      case 'opcion1':
        contenedorSegundoSelect.style.display = 'block';
        break;
      case 'opcion2':
        contenedorTercerSelect.style.display = 'block';
        break;
      case 'opcion3':
        contenedorCuartoSelect.style.display = 'block';
        break;
      case 'opcion4':
        contenedorQuintoSelect.style.display = 'block';
        break;
      case 'opcion5':
         contenedorOtra.style.display = 'block';
         break;
      default:
        break;
    }
  }
}

// Agregar un evento change al primer select
primerSelect.addEventListener('change', actualizarSubSelects)


// Email JS

function recargarPagina() {
  location.reload();
}

const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Sending...';

   const serviceID = 'default_service';
   const templateID = 'template_47lpg9a';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Send Email';
      recargarPagina();

    }, (err) => {
      btn.value = 'Send Email';

    });
});

