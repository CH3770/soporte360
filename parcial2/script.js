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
const formularioContacto = document.querySelector("#form-turno");
const avisoContacto = document.querySelector("#aviso-turno");

function revisarContacto(event) {
    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    const mascota = document.querySelector("#mascota").value.trim();

    if (nombre === "" || correo === "") {
        event.preventDefault();
        avisoContacto.textContent = "Nos falta tu nombre y tu correo para darte el turno.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (correo.includes("@") === false) {
        event.preventDefault();
        avisoContacto.textContent = "Revisa tu correo - le falta el arroba.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else {
        avisoContacto.textContent = "Turno reservado - te atiende Marcelo Ruben Mamani Venegas";
        avisoContacto.classList.add("exito");
        avisoContacto.classList.remove("error");
    }
}

if (formularioContacto && avisoContacto) {
    formularioContacto.addEventListener("submit", revisarContacto);
}
