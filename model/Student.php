<?php

class Student {
    public $name;
    public $age;
    public $description;

    public function __construct( $name, $age, $description ) {
        $this->name        = $name;
        $this->age         = $age;
        $this->description = $description;
    }

}

?>