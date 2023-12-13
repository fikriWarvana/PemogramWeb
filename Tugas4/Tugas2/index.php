<?php

namespace Controller;

require_once 'controller/FruitsController.php';
require_once 'controller/VegetablesController.php';

$fruitsController = new FruitsController();
$vegetablesController = new VegetablesController();

$weightFruits = 4; // kg
$weightVegetables = 10; // kg

$totalCostFruits = $fruitsController->calculateCost($weightFruits);
$totalCostVegetables = $vegetablesController->calculateCost($weightVegetables);

// Menggunakan getter untuk mengakses properti protected
echo "Total cost for {$fruitsController->getName()}: Rp. " . number_format($totalCostFruits, 0, ',', '.') . PHP_EOL;
echo "Total cost for {$vegetablesController->getName()}: Rp. " . number_format($totalCostVegetables, 0, ',', '.') . PHP_EOL;
