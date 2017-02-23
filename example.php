<?php
/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/2/23
 * Time: 23:00
 */

require 'vendor/autoload.php';

use Ebrun\Person;

$person = new Person('Kwan Wong');
$person->setAge(28);
var_dump($person);