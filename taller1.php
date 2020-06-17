<?php
//Calcauladora
//SUMA
echo("CALCULADORA");
echo("<br>");
$numerox1 = 15;
$numerox2 = 42;
$suma= $numerox1 + $numerox2;
echo("La sumatoria de: (".$numerox1.") + (".$numerox2.") = ".$suma);
echo("<br>");
//RESTA
$numeroy1 = 20;
$numeroy2 = 8;
$resta= $numeroy2 - $numeroy1;
echo("La resta de: (".$numeroy2. ")-(".$numeroy1.") = ".$resta);
echo("<br>");
//MULTIPLICACIÓN
$numeroa1 = 8;
$numeroa2 = 12;
$multiplicacion= $numeroa1 * $numeroa2;
echo("La multiplicación de: (".$numeroa1.")*(".$numeroa2.") = ".$multiplicacion);
echo("<br>");
//DIVISIÓN
$numerod1 = 20;
$numerod2 = 4;
$division= $numerod1 / $numerod2;
echo("La división de: (".$numerod1.")÷(".$numerod2.") = ".$division);
echo("<br>");
echo("<hr>");
echo("<br>");

//pregunta 2
/*El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal,
basado en la formula 𝐈𝐌𝐂 =
    𝑷𝒆𝒔𝒐
------------
𝑨𝒍𝒕𝒖𝒓𝒂𝒙𝑨𝒍𝒕𝒖𝒓𝒂
La clasificación del IMC, es la siguiente:
• IMC <= 18,4 (Insuficiencia de peso)
• 18,5<=IMC<=24,9 (Peso normal)
• 25<=IMC<=29,9 (Sobrepeso)
• 30<=IMC<=34,9 (Obesidad 1)
• 35<=IMC<=39,9 (Obesidad 2)
• IMC>=40 (Obesidad 3)*/

//IMC
echo("IMC");
echo("<br>");
$peso = 76;
$altura = 1.53;
$imc1 = $altura * $altura;
$imc = $peso / $imc1;
echo("Su peso es de: ".$peso." Kg");
echo("<br>");
echo("Su altura es de: ".$altura." Cm");
echo("<br>");
echo("Su IMC es de: ".$imc);
echo("<br>");

if($imc<=18){
 echo("Usted tiene insuficiencia de peso....");
}
elseif($imc<=19){
    echo("Su peso es normal....");
}
elseif ($imc<=29) {
    echo("Usted tiene sobrepeso....");
}
elseif ($imc<=34) {
    echo("Usted tiene obesidad 1....");
}
elseif ($imc<=39) {
    echo("Usted tiene obesidad 2....");
}
elseif($imc<=40){
    echo("Usted tiene obesidad 3....");
}
else {
    echo("Usted esta enfermo....");
}
echo("<br>");
echo("<hr>");

//pregunta 3
$cantidadZapatos = 5;
$costoneto = 150000;
$totalCompra = ($cantidadZapatos * $costoneto);

$valorPagar = ($cantidadZapatos *  $costoneto);


if ($cantidadZapatos == 3) 
{
  $valordescuento = $totalCompra * 0.10;
} 
else if ($cantidadZapatos > 3 && $cantidadZapatos <= 5)
{
  $valordescuento = $totalCompra * 0.20;
}
 else if ($cantidadZapatos > 5) 
{
  $valordescuento = $totalCompra * 0.40;
}
echo( "Cantidad Vendida: " .$cantidadZapatos. "<br>Coste Neto : " .$totalCompra. "<br>Valor del Descuento: " .$valordescuento. " <br>Valor a Pagar es:" .$valorPagar);
echo("<hr>")

//pregunta 5
$salpicon=array("dulce 1"=>"banano","dulce 2"=>"manzana","dulce 3"=>"durazno","acido 1"=>"piña","acido 2"=>"naranja","acido 3"=>"lulo")

foreach($variable as $key => $value)

{
    echo($valor);
    echo("<br>");
}
?>