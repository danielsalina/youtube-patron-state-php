<?php

// Esta interfaz define los métodos que cada estado debe implementar.

namespace Order;

interface StateInterface {
    public function proceedToNext(Order $order): void;
    public function cancel(Order $order): void;
    public function getStatus(): string;
}
