<?php
  // class Student {
  //   function avg() {
  //     echo ((80 + 70) / 2). "\n";
  //   }
  // }

  // $a001 = new Student ();
  // $a001->avg();

  // class Student {

  //   public $name;

  //   function avg($math, $english) {
  //     echo (($math + $english) / 2). "\n";
  //   }
  // }

  // $a001 = new Student();
  // $a001->avg(80, 70);
  // $a001->name = "sato";
  // echo $a001->name. "\n";
  // echo $a001->gender. "\n";

  class Student {
    public $name;

    public function __construct($name) {
      $this->name = $name;
    }

    function avg($math, $english) {
      echo (($math + $english) / 2). "\n";
    }
  }

  $a001 = new Student("sato");
  echo $a001->name. "\n";

  $a002 = new Student("tanaka");
  echo $a002->name. "\n";