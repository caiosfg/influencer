<?php

namespace App;

class PrimeFactors {
    public function generate ($number) {

        $factors = [];


        while($number % 2 === 0){
            $factors[] = 2;
            
            $number = $number / 2;
        }

        if($number > 1) {
            $factors[] = $number;
        }

        return $factors;
    }
}