<?php
echo "Hola, soy el servidor de Marcelo y estoy vivo.<br><br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $nombre = $_POST['nombre'] ?? '';
  $correo = $_POST['correo'] ?? '';
  $mensaje = $_POST['mensaje'] ?? '';
  echo "<strong>Datos recibidos:</strong><br>";
  echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
  echo "Correo: " . htmlspecialchars($correo) . "<br>";
  echo "Mensaje: " . htmlspecialchars($mensaje) . "<br>";
}
?>