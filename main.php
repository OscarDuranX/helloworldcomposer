<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 6/10/15
 * Time: 19:32
 */
require __DIR__ . "/vendor/autoload.php";

use Com\Iesebre\Dam2\oscarduran\helloworldcomposer\Hello;

$greetings = new Hello();

$greetings->sayHello();