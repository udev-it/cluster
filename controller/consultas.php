<?php
require("../model/connect.php");
if(isset($_POST['operacion'])&&$_POST['operacion']=="CarrucelMiembro"){
    $sql = "SELECT * FROM miembros LIMIT 1";
    $result = mysqli_query($conexion,$sql);
    while($fila = mysqli_fetch_array($result)) {
        echo '<img src="miembros/'.$fila[1].'"  alt="Logo Miembros" class="img-fluid p-3 mb-5 bg-white rounded">
        <input type="hidden" id="idmiembro" value="'.$fila[0].'"></input>';
    }
}
if(isset($_POST['operacion'])&&$_POST['operacion']=="next"){
    $sql = "SELECT * FROM miembros WHERE id >".$_POST['id']." LIMIT 1";
  
    $result = mysqli_query($conexion,$sql);
    if (mysqli_num_rows($result)!=0){

        while($fila = mysqli_fetch_array($result)) {
            echo '<img src="miembros/'.$fila[1].'"  alt="Logo Miembros" class="img-fluid p-3 mb-5 bg-white rounded">
            <input type="hidden" id="idmiembro" value="'.$fila[0].'"></input>';
        }
    }
    else{
        $sql = "SELECT * FROM miembros LIMIT 1";
        $result = mysqli_query($conexion,$sql);
        while($fila = mysqli_fetch_array($result)) {
            echo '<img src="miembros/'.$fila[1].'"  alt="Logo Miembros" class="img-fluid p-3 mb-5 bg-white rounded">
            <input type="hidden" id="idmiembro" value="'.$fila[0].'"></input>';
        }
    }
}
if(isset($_POST['operacion'])&&$_POST['operacion']=="next2"){
    $sql = "SELECT * FROM miembros WHERE id <".$_POST['id2']." LIMIT 1";
  
    $result = mysqli_query($conexion,$sql);
    if (mysqli_num_rows($result)!=0){
        while($fila = mysqli_fetch_array($result)) {
            echo '<img src="miembros/'.$fila[1].'"  alt="Logo Miembros" class="img-fluid p-3 mb-5 bg-white rounded">
            <input type="hidden" id="idmiembro" value="'.$fila[0].'"></input>';
        }
    }
    else{
        $sql = "SELECT * FROM miembros LIMIT 1";
        $result = mysqli_query($conexion,$sql);
        while($fila = mysqli_fetch_array($result)) {
            echo '<img src="miembros/'.$fila[1].'"  alt="Logo Miembros" class="img-fluid p-3 mb-5 bg-white rounded">
            <input type="hidden" id="idmiembro" value="'.$fila[0].'"></input>';
        }
    }
}



if(isset($_POST['operacion'])&&$_POST['operacion']=="detallemiembro"){
    $sql = "SELECT * FROM miembros LIMIT 1";
    $result = mysqli_query($conexion,$sql);
    while($fila = mysqli_fetch_array($result)) {
        echo '<p>
        <ul style="list-style-type: none;">
        <li><strong>Nombre de la empresa:</strong>'.$fila[2].'</li>
        <li><strong>Estado:</strong>'.$fila[3].'</li>
        <li><strong>Domicilio:</strong>'.$fila[4].'</li>
        <li><strong>Telefono:</strong>'.$fila[5].'</li>
        <li><strong>Página web:</strong>'.$fila[6].'</li>
        <li><strong>Mail empresa:</strong>'.$fila[7].'</li>
        <li><strong>Giro de la empresa:</strong>'.$fila[8].'</li>
        <li><strong>RFC:</strong>'.$fila[9].'</li>
        <li><strong>Presidente/Rep. Legal:</strong>'.$fila[10].' </li>
        <li><strong>Celular:</strong>'.$fila[11].'</li>
        <li><strong>Mail:</strong>'.$fila[12].'</li>
      </ul>

      <input type="hidden" id="iddetallemiembro" value="'.$fila[0].'"></input>
      </p>';
    }
}
if(isset($_POST['operacion'])&&$_POST['operacion']=="detallemiembroder"){
    $sql = "SELECT * FROM miembros WHERE id >".$_POST['id']." LIMIT 1";
  
    $result = mysqli_query($conexion,$sql);
    if (mysqli_num_rows($result)!=0){

        while($fila = mysqli_fetch_array($result)) {
            echo '<p>
            <ul style="list-style-type: none;">
            <li><strong>Nombre de la empresa:</strong>'.$fila[2].'</li>
            <li><strong>Estado:</strong>'.$fila[3].'</li>
            <li><strong>Domicilio:</strong>'.$fila[4].'</li>
            <li><strong>Telefono:</strong>'.$fila[5].'</li>
            <li><strong>Página web:</strong>'.$fila[6].'</li>
            <li><strong>Mail empresa:</strong>'.$fila[7].'</li>
            <li><strong>Giro de la empresa:</strong>'.$fila[8].'</li>
            <li><strong>RFC:</strong>'.$fila[9].'</li>
            <li><strong>Presidente/Rep. Legal:</strong>'.$fila[10].' </li>
            <li><strong>Celular:</strong>'.$fila[11].'</li>
            <li><strong>Mail:</strong>'.$fila[12].'</li>
          </ul>
    
          <input type="hidden" id="iddetallemiembro" value="'.$fila[0].'"></input>
          </p>';
        }
    }
    else{
        $sql = "SELECT * FROM miembros LIMIT 1";
        $result = mysqli_query($conexion,$sql);
        while($fila = mysqli_fetch_array($result)) {
            echo '<p>
        <ul style="list-style-type: none;">
        <li><strong>Nombre de la empresa:</strong>'.$fila[2].'</li>
        <li><strong>Estado:</strong>'.$fila[3].'</li>
        <li><strong>Domicilio:</strong>'.$fila[4].'</li>
        <li><strong>Telefono:</strong>'.$fila[5].'</li>
        <li><strong>Página web:</strong>'.$fila[6].'</li>
        <li><strong>Mail empresa:</strong>'.$fila[7].'</li>
        <li><strong>Giro de la empresa:</strong>'.$fila[8].'</li>
        <li><strong>RFC:</strong>'.$fila[9].'</li>
        <li><strong>Presidente/Rep. Legal:</strong>'.$fila[10].' </li>
        <li><strong>Celular:</strong>'.$fila[11].'</li>
        <li><strong>Mail:</strong>'.$fila[12].'</li>
      </ul>

      <input type="hidden" id="iddetallemiembro" value="'.$fila[0].'"></input>
      </p>';
        }
    }
}
if(isset($_POST['operacion'])&&$_POST['operacion']=="detallemiembroizq"){
    $sql = "SELECT * FROM miembros WHERE id <".$_POST['id2']." LIMIT 1";
  
    $result = mysqli_query($conexion,$sql);
    if (mysqli_num_rows($result)!=0){

        while($fila = mysqli_fetch_array($result)) {
            echo '<p>
            <ul style="list-style-type: none;">
            <li><strong>Nombre de la empresa:</strong>'.$fila[2].'</li>
            <li><strong>Estado:</strong>'.$fila[3].'</li>
            <li><strong>Domicilio:</strong>'.$fila[4].'</li>
            <li><strong>Telefono:</strong>'.$fila[5].'</li>
            <li><strong>Página web:</strong>'.$fila[6].'</li>
            <li><strong>Mail empresa:</strong>'.$fila[7].'</li>
            <li><strong>Giro de la empresa:</strong>'.$fila[8].'</li>
            <li><strong>RFC:</strong>'.$fila[9].'</li>
            <li><strong>Presidente/Rep. Legal:</strong>'.$fila[10].' </li>
            <li><strong>Celular:</strong>'.$fila[11].'</li>
            <li><strong>Mail:</strong>'.$fila[12].'</li>
          </ul>
    
          <input type="hidden" id="iddetallemiembro" value="'.$fila[0].'"></input>
          </p>';
        }
    }
    else{
        $sql = "SELECT * FROM miembros LIMIT 1";
        $result = mysqli_query($conexion,$sql);
        while($fila = mysqli_fetch_array($result)) {
            echo '<p>
        <ul style="list-style-type: none;">
        <li><strong>Nombre de la empresa:</strong>'.$fila[2].'</li>
        <li><strong>Estado:</strong>'.$fila[3].'</li>
        <li><strong>Domicilio:</strong>'.$fila[4].'</li>
        <li><strong>Telefono:</strong>'.$fila[5].'</li>
        <li><strong>Página web:</strong>'.$fila[6].'</li>
        <li><strong>Mail empresa:</strong>'.$fila[7].'</li>
        <li><strong>Giro de la empresa:</strong>'.$fila[8].'</li>
        <li><strong>RFC:</strong>'.$fila[9].'</li>
        <li><strong>Presidente/Rep. Legal:</strong>'.$fila[10].' </li>
        <li><strong>Celular:</strong>'.$fila[11].'</li>
        <li><strong>Mail:</strong>'.$fila[12].'</li>
      </ul>

      <input type="hidden" id="iddetallemiembro" value="'.$fila[0].'"></input>
      </p>';
        }
    }
}

?>