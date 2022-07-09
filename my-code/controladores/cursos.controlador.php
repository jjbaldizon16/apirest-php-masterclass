<?php

class ControladorCursos{

      /** Mostrar todos los cursos */

      public function index(){

        $cursos = ModeloCursos::index("cursos");


        $json = array(

            "status"=>200,
            "total_registros"=>count($cursos),
            "detalle"=>$cursos
       
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