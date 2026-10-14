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

// formulario
const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");

function revisarContacto(event) {
    event.preventDefault();
    
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const mensaje = document.querySelector("#mensaje").value;

    if (nombre === "") {
        avisoContacto.textContent = "Estimado cliente, falta su nombre completo.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (correo === "") {
        avisoContacto.textContent = "Estimado cliente, falta su correo electrónico.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (correo.includes("@") === false) {
        avisoContacto.textContent = "Estimado cliente, su correo no es válido (falta el @).";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (mensaje === "") {
        avisoContacto.textContent = "Estimado cliente, falta describir su consulta.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else {
        avisoContacto.textContent = "Estimado cliente, su consulta ha sido recibida. Te responderemos pronto.";
        avisoContacto.classList.add("exito");
        avisoContacto.classList.remove("error");
        formularioContacto.reset();
    }
}

if (formularioContacto && avisoContacto) {
    formularioContacto.addEventListener("submit", revisarContacto);
}