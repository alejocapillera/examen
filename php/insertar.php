<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exameningles";


$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$objectives = $_POST['objectives'];
$respuesta1 = $_POST['respuesta1'];
$respuesta2 = $_POST['respuesta2'];
$verb1 = $_POST['verb1'];
$verb2 = $_POST['verb2'];
$verb3 = $_POST['verb3'];
$verb4 = $_POST['verb4'];
$verb5 = $_POST['verb5'];
$verb6 = $_POST['verb6'];
$verb7 = $_POST['verb7'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$objectives2 = $_POST['objectives2'];

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

$sql = "INSERT INTO exam (nombre, dni, objectives, respuesta1, respuesta2, verb1, verb2, verb3, verb4, verb5, verb6, verb7, option1, option2, option3, option4, objectives2)
        VALUES ('$nombre','$dni', '$objectives', '$respuesta1', '$respuesta2', '$verb1', '$verb2', '$verb3', '$verb4', '$verb5','$verb6','$verb7', '$option1', '$option2','$option3','$option4','$objectives2')";


if ($conn->query($sql) === TRUE) {
    echo "Los datos del examen se han subido correctamente.";
} else {
    echo "Error al subir los datos del examen: " . $conn->error;
}


$conn->close();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<button class="btn btn-dark" onclick="goBack()">Volver al inicio</button>

<script>
function goBack() {
  window.history.back();
}
</script>
