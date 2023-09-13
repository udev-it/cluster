<?php
      include("model/connect.php");
      
       $item="<script>document.write(itemses);</script>";
       echo ($item);
      $sql="SELECT * FROM img_colaboradores WHERE id>=$item LIMIT 7";
      $result = mysqli_query($conexion, $sql);
      while($fila = mysqli_fetch_array($result)) {
      ?>
      <div class="col-md-3"><img src="<?php echo $fila['img_url']; ?>" alt="hilcorp" class="img-fluid shadow p-2 mb-5 bg-white rounded"></div>
      <?php } ?>