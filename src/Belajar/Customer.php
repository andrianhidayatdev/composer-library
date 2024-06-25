<?php


namespace AndrianDev\Belajar;

class Customer
{
  function __construct(
    private $name
  ) {
  }

  function sayHello()
  {
    return "Hello Customer " . $this->name;
  }
}
