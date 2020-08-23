<?php

require 'mercadoPagoQR.php';

$mp = new mercadoPagoQR();

$monto = $_POST['cuenta'];

$order = $mp->crearOrden($monto);

print_r($order);
