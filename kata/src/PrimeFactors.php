<?php

namespace App;

class PrimeFactors {
    public function generate ($number) {

        if($number > 1) {
            return [$number];
        }
        return [];
    }
}