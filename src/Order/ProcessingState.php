<?php

// Estado concreto: implementará el comportamiento definido en la interfaz StateInterface

namespace Order;

class ProcessingState implements StateInterface {
    public function proceedToNext(Order $order): void {
        // Cambiar al siguiente estado: "Enviado"
        $order->setState(new ShippedState());
    }

    public function cancel(Order $order): void {
        // No se puede cancelar en este estado
        echo "No se puede cancelar, la orden está en procesamiento.\n";
    }

    public function getStatus(): string {
        return 'Procesando';
    }
}
