<?php


include 'db.php';
require "vendor/autoload.php";

$result= $con->prepare("select * from products");
$pdf=new TCPDF();
$pdf->AddPage();
$pdf->SetFont('times','I',18);

$html='<table>
<tr>
<td>Product id</td>
<td>Product name</td>
<td>Category</td>
<td>Price</td>
<td>Quantity</td>
<td>Description</td>
</tr>'

while($row=$result->fetch_assoc()){
$html.='<tr>
<td></td>'



}

</table>';


?>