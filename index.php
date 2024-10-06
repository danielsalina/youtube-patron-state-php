<?php

// Implementación 

require 'vendor/autoload.php';

use Order\Order;

// Crear una nueva orden
$order = new Order();

// Obtener el estado actual
echo "Estado actual: " . $order->getStatus() . "\n";

// Cambiar al siguiente estado
$order->proceedToNext();
echo "Estado después de procesar: " . $order->getStatus() . "\n";

// Cambiar al siguiente estado
$order->proceedToNext();
echo "Estado después de enviar: " . $order->getStatus() . "\n";

// Intentar cancelar la orden después de ser enviada
$order->cancel();

// Cambiar al siguiente estado
$order->proceedToNext();
echo "Estado después de entregar: " . $order->getStatus() . "\n";
