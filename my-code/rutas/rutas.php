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

       /**Preguntando si hay peticiones tipo POST */ 

    if(isset($_SERVER["REQUEST_METHOD"]) &&  $_SERVER["REQUEST_METHOD"] == "POST") {

       $cursos = new ControladorCursos();
       $cursos -> index();

}

  }

    /** Cuando se hace peticiones desde cursos */

    if(array_filter($arrayRutas)[1] == "cursos"){

        /**Preguntar peticiones de tipo GET */

        if(isset($_SERVER["REQUEST_METHOD"]) &&  $_SERVER["REQUEST_METHOD"] == "GET"){

            $registro = new ControladorCursos();
            $registro -> index();
     

        }

          /**Preguntar peticiones de tipo POST */

        if(isset($_SERVER["REQUEST_METHOD"]) &&  $_SERVER["REQUEST_METHOD"] == "POST"){

            $crearCurso = new ControladorCursos();
            $crearCurso -> create();
     

        }
    
      }

      }else{

        /** Cuando se hace peticiones desde un solo curso */

        if(array_filter($arrayRutas)[1] == "cursos" && is_numeric(array_filter($arrayRutas)[2])){

            /**Preguntar peticiones de tipo GET */

        if(isset($_SERVER["REQUEST_METHOD"]) &&  $_SERVER["REQUEST_METHOD"] == "GET"){

            $mostrarCurso = new ControladorCursos();
            $mostrarCurso -> show(array_filter($arrayRutas)[2]);
     

        }
            
            
            /**Preguntar peticiones de tipo PUT */

        if(isset($_SERVER["REQUEST_METHOD"]) &&  $_SERVER["REQUEST_METHOD"] == "PUT"){

            $editarCurso = new ControladorCursos();
            $editarCurso -> update(array_filter($arrayRutas)[2]);
     

        }

            /**Preguntar peticiones de tipo DELETE */

            if(isset($_SERVER["REQUEST_METHOD"]) &&  $_SERVER["REQUEST_METHOD"] == "DELETE"){

                $borrarCurso = new ControladorCursos();
                $borrarCurso -> delete(array_filter($arrayRutas)[2]);
         
    
            }

        }


     }
}