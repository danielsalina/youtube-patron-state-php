<?php

// Estado concreto: implementará el comportamiento definido en la interfaz StateInterface

namespace Order;

class DeliveredState implements StateInterface {
    public function proceedToNext(Order $order): void {
        // Estado final, no hay más estados después de "Entregado"
        echo "La orden ya ha sido entregada. No se puede cambiar de estado.\n";
    }

    public function cancel(Order $order): void {
        // No se puede cancelar en este estado
        echo "No se puede cancelar, la orden ha sido entregada.\n";
    }

    public function getStatus(): string {
        return 'Entregado';
    }
}
