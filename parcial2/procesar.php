<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Turno - Veterinaria Patitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Veterinaria Patitas</h1>
    </header>

    <main>
        <section class="tarjeta">
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
            <h3>Servicios disponibles:</h3>
            <ul>
                <?php
                $servicios = [
                    "Consulta general - Bs 60",
                    "Vacuna antirrabica - Bs 40",
                    "Bano y corte - Bs 50"
                ];

                foreach ($servicios as $servicio) {
                    echo "<li>" . $servicio . "</li>";
                }
                ?>
            </ul>
            <p><strong>Te atiende:</strong> Marcelo Ruben Mamani Venegas</p>
        </section>
    </main>

    <footer>
        <p>Parcial 2 - Marcelo Ruben Mamani Venegas - 20 de octubre de 2026</p>
    </footer>

</body>
</html>