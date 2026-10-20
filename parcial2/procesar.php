<?php
echo "Turno reservado en Veterinaria Patitas<br><br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $nombre = $_POST['nombre'] ?? '';
  $correo = $_POST['correo'] ?? '';
  $mascota = $_POST['mascota'] ?? '';
  
  echo "<strong>Datos recibidos:</strong><br>";
  echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
  echo "Correo: " . htmlspecialchars($correo) . "<br>";
  echo "Mascota: " . htmlspecialchars($mascota) . "<br>";
}


echo "Servicios disponibles:<br>";
$servicios = [
    "Consulta general    - Bs 60",
    "Vacuna antirrabica  - Bs 40",
    "Bano y corte        - Bs 50"
];

foreach ($servicios as $servicio) {
    echo "- " . $servicio . "<br>";
}

echo "<br>Te atiende Marcelo Ruben Mamani Venegas";
?>