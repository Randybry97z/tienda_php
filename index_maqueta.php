<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tienda de Guitarras</title>
    <link rel="stylesheet" href="assets/css/styles.css">
  </head>
  <body>
    <div id="container">
    <!-- CABECERA -->
    <header id="header">
      <div id="logo">
        <img src="assets/img/guitar.png" alt="logo">
        <a href="index.php">
          Tienda de Guitarras
        </a>
      </div>
    </header>
    <!-- MENÚ -->
    <nav id="menu">
      <ul>
        <li>
          <a href="#">
            Inicio
          </a>
        </li>
      </ul>
    </nav>

    <div id="content">
    <!-- BARRA LATERAL -->
    <aside id="lateral">

      <div id="login" class="block_aside">
        <h3>Entrar a la web</h3>
        <form action="" method="post">
          <label for="email">Email</label>
          <input type="text" name="email" />
          <label for="password">Password</label>
          <input type="password" name="password">
          <input type="submit" value="Enviar">
        </form>
        <ul>
          <li><a href="#">Mis pedidos</a></li>
          <li><a href="#">Gestionar Pedidos</a></li>
          <li><a href="#">Gestionar Categorías</a></li>
        </ul>
      </div>
    </aside>

    <!-- CONTENIDO CENTRAL -->
      <div id="central">
        <h1>Productos Destacados</h1>
          <div class="product">
            <img src="assets/img/guitar.png" />
            <h2>Guitarra Acústica</h2>
            <p>$800</p>
            <a href="#" class="button">Comprar</a>
          </div>

          <div class="product">
            <img src="assets/img/guitar.png" />
            <h2>Guitarra Eléctrica</h2>
            <p>$6,000</p>
            <a href="#" class="button">Comprar</a>
          </div>

          <div class="product">
            <img src="assets/img/guitar.png" />
            <h2>Guitarra ElectroAcústica</h2>
            <p>$4,500</p>
            <a href="#" class="button">Comprar</a>
          </div>

        </div>

    </div>

    <!-- PIE DE PÁGINA -->
    <footer id="footer">
      <p>Desarrollado por Bryan Sandoval &copy; <?=date('Y')?></p>
    </footer>
    </div>
  </body>
</html>
