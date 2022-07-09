<?php

require_once "controladores/rutas.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/cursos.controlador.php";

$rutas = new ControladorRutas();
$rutas -> index();



