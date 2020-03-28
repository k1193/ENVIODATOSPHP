<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera api</title>
     <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <div>
            <h1>ENVIANDO DATOS CON PHP</h1>
        </div>
     

      </header>
      <main>
          <section class="contenedorPadre">
                <h3>METODO GET</h3>
                <form action="metodoGET.php" method="GET">
                    <input type="text"  name="nombre"  id="nombre">
                    <input type="text" name="edad"  id="edad">
                    <input type="submit"name="enviar"  id="enviar">

                </form>

                <form action="metodoPOST.php" method ="POST">
                    <input type="text"name="nombre1"  id="nombre1">
                    <input type="text"name="edad1"  id="edad1">
                    <input type="submit"name="enviar1"  id="enviar1">

                </form>
          </section>
      </main>
      <footer>
        <P>Derechos resrvados  ksa.. &copy </P>
        
      </footer>
       
    
</body>
</html>