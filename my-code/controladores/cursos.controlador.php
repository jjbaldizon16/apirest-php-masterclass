<?php

class ControladorCursos{

      /** Mostrar todos los cursos */

      public function index(){

        /**Validar credenciales cliente */

        $clientes = ModeloClientes::index("clientes");

        if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){


          foreach($clientes as $key => $valueCliente){

              if("Basic ".base64_encode($_SERVER['PHP_AUTH_USER'].":".$_SERVER['PHP_AUTH_PW']) 
              == "Basic ".base64_encode($valueCliente["id_cliente"].":".$valueCliente["llave_secreta"]) ){
                  
                /**Mostrar todos los cursos con validacion */

                $cursos = ModeloCursos::index("cursos");

                 if(!empty($cursos)){

                $json = array(
        
                    "status"=>200,
                    "total_registros"=>count($cursos),
                    "detalle"=>$cursos
               
               );
               
               echo json_encode($json, true);
            
               return;

              }else {

                  $json = array("status"=>200,"detalle"=>"Lista vacia");
                  echo json_encode($json, true);
                  return;

              }

              }else{
               
                $json = array("status"=>404,"detalle:"=>"Token no valido");
                

              }

              

          }

          


        }else {
          $json = array("status"=>404,"detalle:"=>"Ocupa credenciales para poder entrar(id cliente y llave secreta)");

          

        }

        echo json_encode($json, true);
        return;             
    
      }

       /** Crear un curso */

      public function create(){

        $json = array(

            "detalle"=>"Curso creado satisfactoriamente"
       
       );
       
       echo json_encode($json, true);
    
       return;   

      }

          /** Mostrar un curso */

          public function show($id){

            $json = array(
    
                "detalle"=>"Mostrando el curso con el id: ".$id
           
           );
           
           echo json_encode($json, true);
        
           return;   
    
          }  
      
      
      /** Editar un curso */

        public function update($id){

            $json = array(
    
                "detalle"=>"Curso editado satisfactoriamente con el id: ".$id
           
           );
           
           echo json_encode($json, true);
        
           return;   
    
          }

      /** Borrar un curso */

      public function delete($id){

        $json = array(

            "detalle"=>"Curso borrado satisfactoriamente con el id: ".$id
       
       );
       
       echo json_encode($json, true);
    
       return;   

      }

      

}