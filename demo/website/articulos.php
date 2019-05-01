
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
                <li class="breadcrumb-item"><a href="catalogo.php">Catalogo</a></li>
                <li class="breadcrumb-item active" aria-current="page">Articulos</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">
          
          <?php $img=0; foreach($articulos as $data): $img++; ?>
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
              <a href="articulo.php">
                <img class="card-img-top" src="https://picsum.photos/200?blur&image=<?php echo $img ?>" alt="<?php echo $data[0] ?>">
              </a>
              <div class="card-body">
                
                <h5 class="card-title"><?php echo $data[0] ?></h5>
                <p class="card-text"><?php  echo $data[1] ?></p>
                <p class="card-text text-muted text-right"><?php  echo $data[3] ?></p>
                <p class="card-text">
                  <?php for ($i=0; $i < 5; $i++) { ?> 
                    <span class="fa fa-star"></span>
                  <?php } ?>
                </p>
                <div class="badges text-right">
                  <span class="badge badge-success"><h2>$<?php echo number_format($data[2],2) ?></h2></span>
                </div>
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
