
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
                <li class="breadcrumb-item active" aria-current="page">Carro de compras</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">
          
         <div class="col">
            <table class="table-responsive-sm">
              <thead>
                <tr>
                  <th>Articulo</th>
                  <th>Descripcion</th>
                  <th>Costo</th>
                  <th>Piezas</th>                  
                  <th>Monto</th>
                  <th></th>
                </tr>
              </thead>
              <?php 
                $b=0; 
                $total=0;
                foreach($articulos as $data):
                  $b++; if($b==6) break; 
              ?>
              <tr>
                <td><?php echo $data[0] ?></td>
                <td><?php echo $data[1] ?></td>
                <td>$<?php echo number_format( $data[2],2) ?></td>
                <td>
                  <form action="">
                    <div class="form-group">
                      <?php $n =  rand(1,15); ?>
                      <input type="number" class="form-control" id="pzs" placeholder="Num" value="<?php echo $n?>">
                    </div>
                  </form>
                </td>
                <td>
                  $<?php 
                    $sub= $data[2] * $n;
                    $total += $sub;
                    echo number_format($sub ,2); 
                    ?>
                </td>
                <td>
                  <button class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></button>
                </td>
              </tr>
              <?php endforeach; ?>
            </table>
            <hr>
            <p>
              <h3 class="text-right text-success">$<?php echo number_format($total,2) ?></h3>
            </p>
            <p class="text-right ">
              <a href="#" class="btn btn-success">
                <img src="assets/images/btn-paypal.png" width="150" alt="PayPal">
              </a>
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
