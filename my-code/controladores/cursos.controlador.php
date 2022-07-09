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

       /** Crear curso */

      public function create(){

        $json = array(

            "detalle"=>"Curso creado satisfactoriamente"
       
       );
       
       echo json_encode($json, true);
    
       return;   

      }

}