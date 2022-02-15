<?php
$cadena = "string";
$varChar = "a";
//$fecha = date("YYYY-MM-DD");
$numero = 125.; //integer
$decimales = 125.25; // float / double

//siempre es muy importante comentar el codigo
$coleccionDeVariables = array('a' => 1 ,
                                'b' => 2,
                                'c' => 3,
                                'd' => 4 );
$nombresEdad = array('Pedro' => array('a' => 1 ,
                                'b' => 2,
                                'c' => 3,
                                'd' => 4 ),
                      'juan' => 17,
                      'Abigail' => 34);

$jsonManual = "{\"atributo1\" : \"valor1\"}";
$jsonManual = '{"atributo2" : "valor2"}';
print_r( json_decode($jsonManual)->atributo2);
//print_r( $coleccionDeVariables);
//echo json_encode( $nombresEdad);


//bit = 1;
//byte = 8 bits  = a
//kilobyte = 1024 bytes
//megabyte = 1024 kb
//gb = 1024 mb
//RAM = random access memory
//ROM = read only memory CMOS
 ?>
