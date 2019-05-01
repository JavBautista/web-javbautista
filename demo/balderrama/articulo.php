
<?php require 'datos.php' ?>
<!doctype html>
<html lang="es">
  <head>
    <?php include 'head.php' ?>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="57">
    <?php include 'nav.php'; ?>

    <!-- catalogo -->
    <section id="catalogo" class="">

      <div class="container">

        <div class="row">
          <div class="col">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="catalogo.php">Catalogo</a></li>
                <li class="breadcrumb-item"><a href="articulos.php">Articulos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Articulo</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">                  
          <div class="col-md-5">
                <img class="img-fluid" src="assets/productos/articulo.jpg" alt="">
          </div>
          <div class="col">

            <h2>Pc Gamer Ryzen 3 Ram 16gb 1tb Vega 8 Hdmi Led 20 Wifi</h2>
            <h3>$11,295</h3>
            <p><span class="fa fa-credit-card"></span> 12 meses de $ 1,11585</p>
            <p><a href="#"><span class="fa fa-heart text-danger"></span></a> Wow! Este articulo le gusta 72 personas, <em class="small">dale me gusta tu tambien!</em></p>
            <p>
              <ul>
                  <li>Procesador: AMD Ryzen 3 2200G con 4 Nucleos Reales </li>
                  <li>MotherBoard: A320 </li>
                  <li>Ram: 16gb </li>
                  <li>Disco Duro: 1tb</li>
                  <li>Gabinete</li>
                  <li>Fuente de poder: 450w Estándar</li>
                  <li>Monitor: Led 19.5”</li>
                  <li>Kit teclado y mouse: Estándar</li>
                  <li>Red: Wifi Interno o externo</li>
              </ul>
            </p>
            
            <button class="btn btn-platzi">Comprar ahora</button>
            <button class="btn btn-outline-secondary">Agregar al carro</button>

            <p class="mx-auto mt-2">
              <img src="assets/images/img-pagos.jpg" alt="Pagos">
            </p>



          </div>



        </div><!--.row-->
      </div>
    </section>
    <!-- /catalogo -->

  <?php include 'footer.php' ?>
  <?php include 'js.php' ?>
  </body>
</html>
