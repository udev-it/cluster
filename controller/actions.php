<?php
include("model/connect.php");

function mostrarImagenes($resultados){
	if ($resultados !=NULL) {
	echo '
         <div class="col"> <a href="'.$resultados['hipervinculo'].'"  target="_blank"> <img src="'.$resultados['img_url'].'" title="'.$resultados['nom_dependencia'].'" alt="se" class= "img-fluid shadow p-3 mb-5 bg-white rounded"> </a> </div>';
	}
}

$sql="SELECT * FROM img_colaboradores";
$result = mysqli_query($conexion, $sql);
$j=0;
echo '<div  class=" row imagen_about_pc">';

while ($fila = mysqli_fetch_array($result)){		
	mostrarImagenes($fila);	
	 $res= $j%4;
	if($res==0 || $j==1){
		echo '</div>';
		echo '<div  class=" row imagen_about_pc">';
	}	
	
/*	if($j==3|| $j==7 || $j==11 || $j==15){
		echo '</div>';
		echo '<div  class=" row imagen_about_pc">';
	}*/
	
	$j++;
}

mysqli_free_result($result);
mysqli_close($conexion);
    
?>