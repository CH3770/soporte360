const btnConfirmar = document.querySelector("#btn-confirmar");
const mensaje = document.querySelector("#mensaje");

btnConfirmar.addEventListener("click", function() {
    mensaje.textContent = "Pedido confirmado - te atiende: Marcelo Ruben Mamani Venegas";
    mensaje.classList.remove("oculto");
});