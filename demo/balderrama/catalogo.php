
<?php require 'datos.php' ?>
<!doctype html>
<html lang="es">
  <head>
    <?php include 'head.php' ?>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="57">
    <?php include 'nav.php'; ?>

    <!-- catalogo -->
    <section id="catalogo">
      <div class="container">
        <div class="row">
          <div class="col">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Catalogo</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">
          
          <?php foreach($categorias as $data): ?>
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
              <a href="articulos.php">
                <img class="card-img-top" src="assets/categorias/<?php echo $data[1] ?>" alt="<?php echo $data[0] ?>">
              </a>
              <div class="card-body">
                <h5 class="card-title text-center fon-weight-bold"><?php echo $data[0] ?></h5>               
              </div>
            </div>
          </div>
        <?php endforeach; ?>


        </div><!--.row-->
      </div>
    </section>
    <!-- /catalogo -->

  <?php include 'footer.php' ?>
  <?php include 'js.php' ?>
  </body>
</html>
