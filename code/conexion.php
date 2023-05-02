<?php
    define('DB_CHARSET','utf-8');
    define('DB_HOST','localhost');
    define('DB_PASS','');
    define('DB_USER','root');
    define('DB_NAME','web');

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Verificar conexion
    if(!$conn)
    {
        die("Conexion fallida: ".mysqli_connect_error());
    }

    // Obtener el número de visitas actual
    $resultado = mysqli_query($conn, "SELECT contador FROM visitas WHERE id = 1");
    $registro = mysqli_fetch_assoc($resultado);
    $visitas = $registro['contador'];

    // Incrementar el número de visitas
    $visitas++;

    // Actualizar el registro en la base de datos
    mysqli_query($conn, "UPDATE visitas SET contador = $visitas WHERE id = 1");

    // Mostrar el número de visitas
    echo "Número de visitas: $visitas";
?>