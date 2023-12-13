<?php

namespace Traits;

trait CalculateTrait
{
    public function calculateCost($weight)
    {
        return $weight * $this->pricePerKg;
    }
}
