<?php
  include './data/dbgestionlibrary.php';
  $DBGestion = new DBGestionLibreria();
  $autores = $DBGestion->getAutores();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Library</title>
</head>
<body>
  <header class="header headerImage">
    <div class="container header-div">
      <h1>Library</h1>
      <nav class="navegacion">
        <a href="index.php">Home</a>
        <a href="books.php">Books</a>
        <a href="authors.php">Authors</a>
        <a href="contacto.php">Contact</a>
      </nav>
    </div>
  </header>

<main class="container container-main">

  <h2>Authors</h2>

  <div class="librery-container-modified">
    <?php
      foreach($autores as $autor){
        echo "<section class='section-main st-md'>";
        echo "<div class='autor'>";
        echo "<div class='identified'><h3>" . $autor['nombre']  ."<br>".  $autor['apellido'] . "</h3></div>";
        echo "<p>" .'Teléfono: '. $autor['telefono']  . "</p>"; 
        echo "<p>" .'Dirección: '. $autor['direccion']  . "</p>";  
        echo "<p>" .'Ciudad: '. $autor['ciudad']  . "</p>";         
        echo "</div>";
        echo "</section>";
      }
    ?>
  </div>
</main>
</body>

<footer class="footer">
  <div class="container">
      <nav class="navegacion">
        <a href="index.php">Home</a>
        <a href="books.php">Books</a>
        <a href="authors.php">Authors</a>
        <a href="contacto.php">Contact</a>
      </nav>
  </div>
</footer>

</html>