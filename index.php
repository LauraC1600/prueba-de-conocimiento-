<?php

require_once  __DIR__ . "/models/Arbol.php";
require_once  __DIR__ . "/models/Flor.php";
require_once  __DIR__ . "/models/Arbusto.php";


$p1 = new arbol ("pino", "redondo", 5, "marron", "grandes","abeto", 43, true, "frio");
 $p2 = new flor ("rosa", 5, "verde", "tulipan", "primavera","tulipan", 3, false, "templado");
 $p3 = new arbusto (5, true, "arbusto", "verde", true,"arbusto", 7, true, "frio");


echo $p1->mensaje()." y mi nombre es ". $p1->getNombre();
echo "<br>";
 echo $p2->mensaje()." y mi nombre es ". $p1->getNombre();
 echo "<br>";
 echo $p3->mensaje()." y mi nombre es ". $p1->getNombre();


