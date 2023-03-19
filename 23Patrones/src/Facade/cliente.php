<?php
declare(strict_types=1);
namespace Php\Oop\Facade;

require __DIR__ . '/../../vendor/autoload.php';

 
$vehiculos = [ 
    new Vehiculo('Berlina 5 puertas', 6999.99), 
    new Vehiculo('Compacto 3 puertas', 4000), 
    new Vehiculo('Espace 5 puertas', 8000), 
    new Vehiculo('Break 5 puertas', 7000), 
    new Vehiculo('Coupé 2 puertas', 9000), 
    new Vehiculo('Utilitario 3 puertas', 5000), 
 ]; 
  
 $webServiceAuto = new WebServiceAuto(new ComponenteCatalogo(vehiculos: $vehiculos), new ComponenteGestionDocumento()); 
 echo $webServiceAuto->buscarDocumento(indice: 1); 
 echo $webServiceAuto->buscarDocumento(indice: 2); 
  
 $precioMedio = 6000; 
 $desviacionMax = 1000; 
  
 $resultados = $webServiceAuto->buscaVehiculos(precioMedio: $precioMedio, desviacionMax: $desviacionMax); 
  
 if (($numVehiculos = count($resultados)) > 0) { 
    $precioMin = $precioMedio - $desviacionMax; 
    $precioMax = $precioMedio + $desviacionMax; 
  
    echo $numVehiculos . " vehículo(s) tienen un precio comprendido entre $precioMin y $precioMax" . PHP_EOL; 
  
    foreach ($resultados as $resultado) { 
        echo $resultado->getDescripcion() . " precio: ". $resultado->getPrecio() . PHP_EOL; 
    } 
 }
 
 