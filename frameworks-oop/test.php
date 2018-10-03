<?php
/**
 * Created by PhpStorm.
 * User: stanh
 * Date: 26-9-2018
 * Time: 10:05
 */

include 'Person.php';

$joeyS = new Person('Joey','Schmitz');

echo 'Hallo ' . $joeyS->firstname . ' ' . $joeyS->lastname . '<br><br>';

echo 'Hello ' . strtoupper($joeyS->getFullname());
