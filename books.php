<?php
  include './data/dbgestionlibrary.php';
  $DBGestion = new DBGestionLibreria();
  $libros = $DBGestion->getLibros();
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

  <h2>Books</h2>

  <div class="librery-container">
  <?php
      foreach($libros as $libro){
        echo "<section class='section-main'>";
        echo "<div class='book'>";
        echo "<img src='" . $libro['img_libro'] . "' alt='libro1' loading='lazy'>";
        echo "<h3 class='tittle'>" . $libro['nombre_libro'] . "</h3>";
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