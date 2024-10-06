<?php

// Estado concreto: implementará el comportamiento definido en la interfaz StateInterface

namespace Order;

class ShippedState implements StateInterface {
    public function proceedToNext(Order $order): void {
        // Cambiar al siguiente estado: "Entregado"
        $order->setState(new DeliveredState());
    }

    public function cancel(Order $order): void {
        // No se puede cancelar en este estado
        echo "No se puede cancelar, la orden ha sido enviada.\n";
    }

    public function getStatus(): string {
        return 'Enviado';
    }
}
