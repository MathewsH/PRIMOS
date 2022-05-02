<?php
    function Primos($inicial, $final){
        $Array = [];
        $divisores = 0;
        for($x=$inicial;$x<$final; $x++){
            $divisores = 0;
            for($y=2;$y<$x; $y++){
                if($x % $y == 0){
                        $divisores++;
                }
            }
            if($divisores == 0){
                array_push($Array, $x);
            }
        }
        echo implode(",",$Array);
    }
Primos(10,29);