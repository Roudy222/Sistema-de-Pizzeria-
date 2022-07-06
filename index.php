<?php
include "style.php";
date_default_timezone_set("America/Guayaquil");
//Client 1
$numClients1 = 50;
$numPedidoClients1 = 3;
$time = date("d-M-Y h:i:s");
$timePedido1 = strtotime ( '+0 hour' , strtotime ($time) ) ; 
$timePedido1 = strtotime ( '+10 minute' , $timePedido1 ) ; 
$timePedido1 = strtotime ( '+30 second' , $timePedido1 ) ; 

//Client 2
$numClients2 = 150;
$numPedidoClients2 = 5;
$timePedido2 = strtotime ( '+0 hour' , strtotime ($time) ) ; 
$timePedido2 = strtotime ( '+20 minute' , $timePedido2 ) ; 
$timePedido2 = strtotime ( '+30 second' , $timePedido2 ) ; 

$pricesProduct = 120.00;
for ($i = 1; $i <= $numClients1; $i++) {
    $total1 = $numClients1 * $pricesProduct;
}
for ($i = 1; $i <= $numClients2; $i++) {
    $total2 = $numClients2 * $pricesProduct;
}
?>

<script language="JavaScript" type="text/javascript">
//Codigo de reloj digital 
function show5(){
if (!document.layers&&!document.all&&!document.getElementById)
return
 
 var Digital=new Date()
 var hours=Digital.getHours()
 var minutes=Digital.getMinutes()
 var seconds=Digital.getSeconds()
 
var dn="PM"
if (hours<24)
dn="AM"
if (hours>24)
hours=hours-24
if (hours==0)
hours=24
 
 if (minutes<=9)
 minutes="0"+minutes
 if (seconds<=9)
 seconds="0"+seconds
//change font size here to your desire
myclock="<b>Hora actual:   "+hours+":"+minutes+":"
 +seconds+" "+dn+"</b>"
if (document.layers){
document.layers.liveclock.document.write(myclock)
document.layers.liveclock.document.close()
}
else if (document.all)
liveclock.innerHTML=myclock
else if (document.getElementById)
document.getElementById("liveclock").innerHTML=myclock
setTimeout("show5()",50)
 }
 
 
window.onload=show5
  
 </script>


<h5 class="centered" > 

 <?php
 //Codigo para mostrar la fecha del día
 $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
 $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

 echo $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

?></h5>

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-lg-10">
            <h1 style="text-align:left; color:darkgray">
            <img src="dist/perfil-enblanco.JPG" alt="">
                   Pizzeria<img src="dist/fastdelivery.jpg"width="450" height="180" alt="">
                   <img src="dist/icon.ico" alt="" >
                   </h1>
                 
            
            <table class="table">
            <span id="liveclock" style="left:0;top:0; font-size:36px; font-family:'Lucida Sans'"></span>
                <tr>
                    <td class="table-success">
                        <h3 style="color:darkcyan" class="bnt bnt-info">Sector #1</h3>
                        <?php
                        print_r("Calcular la venta del d'a:");
                        echo "<br>";
                        print_r("Numero de clientes => " . $numClients1);
                        echo "<br>";
                        print_r("Precio de producto =>  " . number_format($pricesProduct, 2, '.', ''));
                        echo "</br>";
                        print_r("Total dinero al día => " . number_format($total1, 2, '.', ''));

                        ?>
                    </td>
                    <td class="table-warning">
                        <h3 style="color:coral">Sector #2</h3>
                        <?php
                        print_r("Calcular la venta del día:");
                        echo "<br>";
                        print_r("Numero de clientes => " . $numClients2);
                        echo "<br>";
                        print_r("Precio de producto =>  " . number_format($pricesProduct, 2, '.', ''));
                        echo "<br>";
                        print_r("Total dinero al dia => " . number_format($total2, 2, '.', ''));
                        echo "<br><br>";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="table-success">
                        <?php
                        print_r("Calcular el número de pedido al día:");
                        echo "<br>";
                        print_r("Numero de pedido por clientes => " . $numPedidoClients1);
                        echo "<br>";
                        print_r("Numero de clientes => " . $numClients1);
                        echo "<br>";
                        print_r("Total de pedidos por clientes al dia =>  " . $numClients1 * $numPedidoClients1);
                        echo "<br>";
                        ?>
                    </td>
                    <td class="table-warning">
                        <?php
                        print_r("Calcular la numero de pedido al dia:");
                        echo "<br>";
                        print_r("Numero de pedido por clientes => " . $numPedidoClients2);
                        echo "<br>";
                        print_r("Numero de clientes => " . $numClients2);
                        echo "<br>";
                        print_r("Total de pedidos por clientes al dia =>  " . $numClients2 * $numPedidoClients2);
                        echo "<br><br>";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="table-success">
                        <?php
                        print_r("Calcular la tiempo del pedido al dia:");
                        echo "<br>";
                        print_r("Fecha - Hora orden pedido => " . $time);
                        echo "<br>";
                        print_r("Fecha - Hora entrega pedido => " .date ( "d-M-Y h:i:s" , $timePedido1) );
                        echo "<br>";
                        ?>
                    </td>
                    <td class="table-warning">
                    <?php
                        print_r("Calcular el tiempo del pedido al dia:");
                        echo "<br>";
                        print_r("Fecha - Hora orden pedido => " . $time);
                        echo "<br>";
                        print_r("Fecha - Hora entrega pedido => " .date ( "d-M-Y h:i:s" , $timePedido2) );
                        echo "<br>";
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>