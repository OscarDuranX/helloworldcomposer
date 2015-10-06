<?php
require  __DIR__ . "/vendor/autoload.php";

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
        $this->faker = Faker\Factory::create();
    }
    public function sayHello()
    {
        echo "Hello ". $this->faker->name ."!\n";
    }

}