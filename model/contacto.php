<?php
    include 'connect.php';
    if(isset($_POST['addcontacto'])){
        $nombre = $_POST['nombre'];
        echo $nombre;
        
    }
?>