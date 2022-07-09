<?php

class ControladorCursos{

      /** Mostrar todos los registros */

      public function index(){

        $json = array(

            "detalle"=>"Mostrando todos los cursos"
       
       );
       
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