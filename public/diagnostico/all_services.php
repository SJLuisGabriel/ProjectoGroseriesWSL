<?php
$host = 'localhost';
$usuario = 'topicos';
$password = 'TopicosEspWeb#';
$base_de_datos = 'diagnostico';
$puerto = 3306;

$conexion = new mysqli($host, $usuario, $password, $base_de_datos, $puerto);

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

$query = "SELECT * FROM 19031333_services";
$resultado = $conexion->query($query);

if (!$resultado) {
    die("Error al ejecutar la consulta: " . $conexion->error);
}
$titulos = array();
$descripciones = array();

while ($fila = $resultado->fetch_assoc()) {
    $titulos[] = $fila['titulo'];
    $descripciones[] = $fila['description'];
}
$conexion->close();
?>

<body>
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- Start: SERVICE LIST -->
        <div class="container">
          <div class="page-header">
            <h2>Our Services</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="img/placeholder-260x150.jpg" alt="product name">
                  <div class="caption">
                    <h3><?php echo $titulo; ?></h3>
                    <p>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                      <?php echo $descripcion;?><?php echo $descripcion;?>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="pagination pagination-centered">
                <ul>
                  <li class="disabled">
                    <a href="#">&laquo;</a>
                  </li>
                  <li class="active">
                    <a href="#">1</a>
                  </li>
                  <li>
                    <a href="#">2</a>
                  </li>
                  <li>
                    <a href="#">3</a>
                  </li>
                  <li>
                    <a href="#">4</a>
                  </li>
                  <li>
                    <a href="#">5</a>
                  </li>
                  <li>
                    <a href="#">6</a>
                  </li>
                  <li>
                    <a href="#">&raquo;</a>
                  </li>
                </ul>
          </div>
        </div>
      <!-- End: SERVICE LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>

