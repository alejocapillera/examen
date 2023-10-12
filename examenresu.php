<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exameningles";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

$sql = "SELECT * FROM exam";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Listado de Exámenes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <h1>Listado de Examenes</h1>
  <a href="index.html"><button class="btn btn-dark">VOLVER ATRAS</button></a>
  <?php
  
  if ($result && $result->num_rows > 0) {
    echo '<ul class="examenes">';
    
    while ($row = $result->fetch_assoc()) {
      echo '<li class="exam">';
      echo '<p><strong>Nombre:</strong> ' . $row['nombre'] . '</p>';
      echo '<p><strong>DNI:</strong> ' . $row['dni'] . '</p>';
      echo '<p><strong>Objetivos:</strong> ' . $row['objectives'] . '</p>';
      echo '<p><strong>Pregunta 1:</strong> ' . $row['respuesta1'] . '</p>';
      echo '<p><strong>Pregunta 2:</strong> ' . $row['respuesta2'] . '</p>';
      echo '<p><strong>Verbo 1:</strong> ' . $row['verb1'] . '</p>';
      echo '<p><strong>Verbo 2:</strong> ' . $row['verb2'] . '</p>';
      echo '<p><strong>Verbo 3:</strong> ' . $row['verb3'] . '</p>';
      echo '<p><strong>Verbo 4:</strong> ' . $row['verb4'] . '</p>';
      echo '<p><strong>Verbo 5:</strong> ' . $row['verb5'] . '</p>';
      echo '<p><strong>Verbo 6:</strong> ' . $row['verb6'] . '</p>';
      echo '<p><strong>Verbo 7:</strong> ' . $row['verb7'] . '</p>';
      echo '<p><strong>Opción 1:</strong> ' . $row['option1'] . '</p>';
      echo '<p><strong>Opción 2:</strong> ' . $row['option2'] . '</p>';
      echo '<p><strong>Opción 3:</strong> ' . $row['option3'] . '</p>';
      echo '<p><strong>Opción 4:</strong> ' . $row['option4'] . '</p>';
      echo '<p><strong>Objetivos2:</strong> ' . $row['objectives2'] . '</p>';
      echo '</li>';
    }
    
    echo '</ul>';
  } else {
    echo '<p>No se encontraron exámenes.</p>';
  }
  ?>
</body>
</html>
