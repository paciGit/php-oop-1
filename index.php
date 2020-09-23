<?php

    class User {

      public $Name;
      public $Lastname;
      public $Dateofbirth;
      public $Country;
      public $Password;

      public function  __construct($Name, $Lastname, $Dateofbirth, $Country, $Password) {
        $this -> Name  = $Name;
        $this -> Lastname  = $Lastname;
        $this -> Dateofbirth  = $Dateofbirth;
        $this -> Country  = $Country;
        $this -> Password = $Password;

      }

      public function __toString() {

        return "USER DATA: <br> Name: " . $this-> Name .
               "<br> Lastname: " . $this -> Lastname .
               "<br> Date of birth: " . $this -> Dateofbirth .
               "<br> Country: " . $this -> Country .
               "<br> Password: " . $this -> Password;

      }

    }

    $user1 = new User("Arthur", "Morgan", "7/7/1863", "Northern United States", "default1");
    $user2 = new User("Niko", "Bellic", "4/4/1978", "Kosovo", "default3");
    $user3 = new User("George", "Stobbart", "10/10/1981", "California", "default3");

    echo $user1;
    echo "<br><br>";
    echo $user2;
    echo "<br><br>";
    echo $user3;

?>
