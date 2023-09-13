$(document).ready(function(){

    $('#contacto').click(function(){
       
       if($('#email').val()!="" && $('#telefono').val()!="" && $('#nombre').val()!="" ){
          
        
        $.ajax({
            type:"POST",
            url:"model/contacto.php",
            data: "addcontacto=0" + "&nombre=" + $('#nombre').val() + "&email=" + $('#email').val() + "&telefono="+ $('#telefono').val() 
            + "&redessociales1="+ $('#redessociales1').val() + "&redessociales2="+ $('#redessociales2').val()+ "&comentario="+ $('#comentario').val()
            + "&institucion="+ $('#institucion').val(),
            success:function(r){
                $("#tempo").html(r);
            }
        });
    }
    else{
        alert("Por favor, rellene todos campos");
    }
   
    });
});