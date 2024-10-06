<?php

// Contexto: Objeto principal que tiene un estado. En nuestro caso, es la orden de compra.

namespace Order;

class Order {

  public function __construct(private $state = new PendingState()) {}

  public function setState(StateInterface $state): void {
      $this->state = $state;
  }

  public function proceedToNext(): void {
      $this->state->proceedToNext($this);
  }

  public function cancel(): void {
      $this->state->cancel($this);
  }

  public function getStatus(): string {
      return $this->state->getStatus();
  }
}
