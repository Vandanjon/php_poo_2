<?php

require_once "Vehicle.php";

Class Truck extends Vehicle {

    public const STOCK_STATUS = [
        "in filling",
        "full"
    ];

    private string $energy;
    private int $stockCapacity;
    private int $stock = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockCapacity = $stockCapacity;
    }

//METHODS

public function checkStock() : string {
    if ($this->stock < $this->stockCapacity) {
return 'in filling';
    } 
    else {
        return "full";
    }
}

//GET/SET
public function getEnergy(): string
{
    return $this->energy;
}

public function setEnergy(string $energy): void
{
    $this->energy = $energy;
}

public function getStockCapacity(): int
{
    return $this->stockCapacity;
}

public function setStockCapacity(int $stockCapacity): void
{
    $this->stockCapacity = $stockCapacity;
}

public function getStock(): int
{
    return $this->stock;
}

public function setStock(int $stock): void
{
    $this->stock = $stock;
}





}