<?php
require 'Modelo_Grafico.php';
$MG =new Modelo_Grafico();
$Consulta= $MG->TraerDatosGraficosBar();
echo json_encode($Consulta);
?>