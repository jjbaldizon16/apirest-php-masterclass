<?php

class ControladorClientes {

     /** Crear un registro */

     public function create(){

        $json = array(

            "detalle"=>"Registro guardado"
       
       );
       
       echo json_encode($json, true);
    
       return; 


     }

}