<?php

// Estado concreto: implementará el comportamiento definido en la interfaz StateInterface

namespace Order;

class PendingState implements StateInterface {
    public function proceedToNext(Order $order): void {
        // Cambiar al siguiente estado: "Procesando"
        $order->setState(new ProcessingState());
    }

    public function cancel(Order $order): void {
        // Cancelar la orden
        echo "La orden ha sido cancelada.\n";
    }

    public function getStatus(): string {
        return 'Pendiente';
    }
}
