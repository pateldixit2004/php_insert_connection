<?php
    echo "Hello";
    class Math
    {
        public $a;
        public $b;

        function add()
        {
            echo $this -> a+ $this -> b;
        }
    }

    $m1= new Math();
    $m1->a=10;
    $m1->b=20;
    $m1->add();
?>