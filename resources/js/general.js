const form = document.querySelector('form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');

// Validación de caracteres permitidos para el nombre y email
nameInput.addEventListener('input', () => {
    nameInput.setCustomValidity('');
    const regex = /[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+/;
    if (!regex.test(nameInput.value)) {
        nameInput.setCustomValidity('Por favor, ingrese caracteres válidos (letras y espacios)');
    }
});

emailInput.addEventListener('input', () => {
    emailInput.setCustomValidity('');
    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!regex.test(emailInput.value)) {
        emailInput.setCustomValidity('Por favor, ingrese un email válido');
    }
});

// Envío del formulario
form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData
