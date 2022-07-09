<?php

$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);

if(count(array_filter($arrayRutas)) == 0){

/*Cuando no se hace ninguna peticion a la API*/

$json = array(

     "detalle"=>"no encontrado"

);

echo json_encode($json, true);

return;

}else{

    if(count(array_filter($arrayRutas)) == 1) {

    /** Cuando se hace peticiones desde registro */

  if(array_filter($arrayRutas)[1] == "registro"){

    $json = array(

        "detalle"=>"estoy en registro"
   
   );
   
   echo json_encode($json, true);

   return;

  }

    /** Cuando se hace peticiones desde cursos */

    if(array_filter($arrayRutas)[1] == "cursos"){

        $json = array(
    
            "detalle"=>"estoy en cursos"
       
       );
       
       echo json_encode($json, true);

       return;
    
      }

      }else{

        /** Cuando se hace peticiones desde un solo curso */

        if(array_filter($arrayRutas)[1] == "cursos" && is_numeric(array_filter($arrayRutas)[2])){

            $json = array(
    
                "detalle"=>"estoy en un solo curso"
           
           );
           
           echo json_encode($json, true);

           return;

        }


     }
}