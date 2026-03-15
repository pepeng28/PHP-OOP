<?php

class Person {
  const AUTHOR = "El Coding";

  var string $name;
  var ?string $address = null;
  var string $country = "Indonesia";

  function sayHello(?string $name) {
    if (is_null($name)) {
      echo "hi, my name is $this->name" . PHP_EOL;
    } else {
      echo "hi $name, my name is $this->name" . PHP_EOL;
    }
  }
}

