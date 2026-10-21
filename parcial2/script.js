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
const formularioTurno = document.querySelector("#form-turno");
const avisoTurno = document.querySelector("#aviso-turno");

function revisarTurno(event) {
    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    const mascota = document.querySelector("#mascota").value.trim();

    if (nombre === "" || correo === "") {
        event.preventDefault();
        avisoTurno.textContent = "Nos falta tu nombre y tu correo para darte el turno.";
        avisoTurno.classList.add("error");
        avisoTurno.classList.remove("exito");
    } else if (correo.includes("@") === false) {
        event.preventDefault();
        avisoTurno.textContent = "Revisa tu correo - le falta el arroba.";
        avisoTurno.classList.add("error");
        avisoTurno.classList.remove("exito");
    } else {
        avisoTurno.textContent = "Turno reservado - te atiende Marcelo Ruben Mamani Venegas";
        avisoTurno.classList.add("exito");
        avisoTurno.classList.remove("error");
    }
}

if (formularioTurno && avisoTurno) {
    formularioTurno.addEventListener("submit", revisarTurno);
}
