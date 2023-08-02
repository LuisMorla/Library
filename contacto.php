<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <script src="/js/app.js"></script>
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

  <main class="container seccion">
    <h1>Contacto</h1>

    <picture class="picture">
      <source srcset="./images/libreriaForm.jpg" type="image/jpeg">
      <source srcset="./images/libreriaForm.jpg" type="image/jpeg">
      <img loading="lazy" src="./images/libreriaForm.jpg" alt="imagen contacto">
    </picture>

    <h2>Llene el formulario de contacto</h2>


    <form action="./data/formulario.php" method="post" class="formulario">
  <fieldset>
    <legend>
      Información Personal
    </legend>

    <label for="fecha">Fecha:</label>
    <input required type="date" id="fecha" name="fecha">

    <label for="email">E-mail: </label>
    <input required type="email" id="email" name="email" placeholder="Tu Email">

    <label for="nombre">Nombre: </label>
    <input required type="text" id="nombre" name="nombre" placeholder="Tu Nombre">

    <label for="asunto">Asunto: </label>
    <input required type="text" id="asunto" name="asunto" placeholder="Tu Asunto">

    <label for="comentario">Comentario: </label>
    <textarea required name="comentario" id="comentario"></textarea>
  </fieldset>

  <input type="submit" value="Enviar" class="buttom-style">
</form>

  </main>

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
</body>

</html>