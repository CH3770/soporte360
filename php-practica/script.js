const btnTheme = document.getElementById('btn-theme');

if (btnTheme) {
    btnTheme.addEventListener('click', () => {
        document.body.classList.toggle('modo-ocuro');
        
        if (document.body.classList.contains('modo-ocuro')) {
            btnTheme.textContent = '☀️';
        } else {
            btnTheme.textContent = '🌙';
        }
    });
}

const btnHamburger = document.getElementById('btn-hamburger');
const navMenu = document.getElementById('nav-menu');

if (btnHamburger && navMenu) {
    btnHamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });
}

// formulario
const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");

function revisarContacto(event) {
    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    const mensaje = document.querySelector("#mensaje").value.trim();

    if (nombre === "") {
        event.preventDefault();
        avisoContacto.textContent = "Estimado cliente, falta su nombre completo.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (correo === "") {
        event.preventDefault();
        avisoContacto.textContent = "Estimado cliente, falta su correo electrónico.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (correo.includes("@") === false) {
        event.preventDefault();
        avisoContacto.textContent = "Estimado cliente, su correo no es válido (falta el @).";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (mensaje === "") {
        event.preventDefault();
        avisoContacto.textContent = "Estimado cliente, falta describir su consulta.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    }
}

if (formularioContacto && avisoContacto) {
    formularioContacto.addEventListener("submit", revisarContacto);
}   formularioContacto.addEventListener("submit", revisarContacto);
