<?php

namespace Com\Iesebre\Dam2\oscarduran\helloworldcomposer;

use Faker\Factory;


/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 6/10/15
 * Time: 19:31
 */
class Hello
{
    public $faker;

    public function __construct(){
        $this->faker = Factory::create();
    }
    public function sayHello()
    {
        echo "Hola señor/ra ". $this->faker->name ."!\n";
    }

}