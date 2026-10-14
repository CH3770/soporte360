const btnTheme = document.getElementById('btn-theme');

btnTheme.addEventListener('click', () => {
    document.body.classList.toggle('modo-ocuro');
    
    if (document.body.classList.contains('modo-ocuro')) {
        btnTheme.textContent = '☀️';
    } else {
        btnTheme.textContent = '🌙';
    }
});

const btnHamburger = document.getElementById('btn-hamburger');
const navMenu = document.getElementById('nav-menu');

if (btnHamburger && navMenu) {
    btnHamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });
}

const formContacto = document.getElementById('form-contacto');
const avisoContacto = document.getElementById('aviso-contacto');

if (formContacto && avisoContacto) {
    formContacto.addEventListener('submit', (e) => {
        e.preventDefault();

        const nombre = document.getElementById('nombre').value.trim();
        const correo = document.getElementById('correo').value.trim();
        const mensaje = document.getElementById('mensaje').value.trim();

        if (nombre === '' || correo === '' || mensaje === '') {
            avisoContacto.textContent = 'Por favor, completa todos los campos requeridos.';
            avisoContacto.className = 'aviso error';
            return;
        }

        avisoContacto.textContent = '¡Gracias por escribirnos! Te responderemos a la brevedad.';
        avisoContacto.className = 'aviso exito';
        formContacto.reset();
    });
}