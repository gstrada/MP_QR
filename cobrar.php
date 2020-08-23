<?php

require 'mercadoPagoQR.php';

$mp = new mercadoPagoQR();

$monto = $_POST['cuenta'];

$order = $mp->crearOrden($monto);

if ($order) {

    header('Location: '.'https://prueba-qr.herokuapp.com/QR.php');

}
