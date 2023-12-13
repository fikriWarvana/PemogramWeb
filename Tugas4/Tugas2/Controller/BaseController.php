<?php

namespace Controller;

abstract class BaseController
{
    protected $name;
    protected $pricePerKg;

    abstract public function calculateCost($weight);

    // Tambahkan getter untuk properti protected
    public function getName()
    {
        return $this->name;
    }

    public function getPricePerKg()
    {
        return $this->pricePerKg;
    }
}
