<?php

namespace Controller;

require_once 'BaseController.php';
require_once 'Traits/CalculateTrait.php';

class FruitsController extends BaseController
{
    use \Traits\CalculateTrait; // tambahkan backslash di depan Traits

    public function __construct()
    {
        $this->name = "buah";
        $this->pricePerKg = 110000;
    }
}
