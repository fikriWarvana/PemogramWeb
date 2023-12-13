<?php

namespace Controller;

require_once 'BaseController.php';
require_once __DIR__ . '/../traits/CalculateTrait.php';

class VegetablesController extends BaseController
{
    use \Traits\CalculateTrait;

    public function __construct()
    {
        $this->name = "sayur";
        $this->pricePerKg = 8000;
    }
}
