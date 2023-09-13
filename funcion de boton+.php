<script language='javascript'>
      var itemses=0;
      var cantidad=0;
    var inicio = 7;
    function aumentar(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar

    cantidad = parseInt(document.getElementById('cantidad').value) + inicio; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
   document.getElementById('cantidad').value=cantidad;

   itemses =document.getElementById('cantidad').value;
  // alert(itemses);

  }

 // alert(itemses);
    </script>


<?php
      include("model/connect.php");
      
       $item='';
       
      $sql="SELECT * FROM img_colaboradores WHERE id>=$item LIMIT 7";
      $result = mysqli_query($conexion, $sql);
      while($fila = mysqli_fetch_array($result)) {
      ?>
      <div class="col-md-3"><img src="<?php echo $fila['img_url']; ?>" alt="hilcorp" class="img-fluid shadow p-2 mb-5 bg-white rounded"></div>
      <?php } ?>