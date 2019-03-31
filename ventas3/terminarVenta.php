<?php

if(($_POST[total]==0)) {
	header("Location: ./vender.php?status=6");
};


session_start();



$total = $_POST["total"];
include_once "base_de_datos.php";


$ahora = date("Y-m-d H:i:s");
$cliente=$_SESSION["cliente"]["idcliente"];

echo $cliente;
$sentencia = $base_de_datos->prepare("INSERT INTO ventas(fecha,cliente, total) VALUES (?,?, ?);");
$sentencia->execute([$ahora, $cliente, $total]);

$sentencia = $base_de_datos->prepare("SELECT id FROM ventas ORDER BY id DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$idVenta = $resultado === false ? 1 : $resultado->id;

$base_de_datos->beginTransaction();
$sentencia = $base_de_datos->prepare("INSERT INTO productos_vendidos(id_producto, id_venta, cantidad) VALUES (?, ?, ?);");
$sentenciaExistencia = $base_de_datos->prepare("UPDATE productos SET existencia = existencia - ? WHERE id = ?;");
foreach ($_SESSION["carrito"] as $producto) {
	$total += $producto->total;
	$sentencia->execute([$producto->id, $idVenta, $producto->cantidad]);
	$sentenciaExistencia->execute([$producto->cantidad, $producto->id]);
}
$base_de_datos->commit();
unset($_SESSION["carrito"]);
unset($_SESSION["cliente"]);

$_SESSION["carrito"] = [];
// $_SESSION["cliente"] = [];

header("Location: ./vender.php?status=1");
?>