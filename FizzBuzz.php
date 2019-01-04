<?php
class FizzBuzz{

    public function fizzBuzzTest($i){
        /**
        Tjek for at tallet kan divideres med 3 og 5 uden restprodukt, for at give "FizzBuzz".
        Man kunne også tjekke om tallet kan divideres med 15, da både 3 og 5 går op i 15. Derved kunne && (AND) operatoren spares.
        Jeg valgte dog at tjekke for både 3 og 5, således det er mere letlæseligt.
        Der testes for "FizzBuzz" først da der ellers kommer fejl.
        **/
        if( $i % 3 == 0 && $i % 5 == 0 ){
            return 'FizzBuzz';
        } 
        // Tjek for at tallet kan divideres med 3 uden restprodukt, for at give "Fizz".
        elseif( $i % 5 == 0 ){
            return 'Buzz';
        } 
        // Tjek for at tallet kan divideres med 5 uden restprodukt, for at give "Buzz".
        else if( $i % 3 == 0){
            return 'Fizz';
        }
        //Output de tal der ikke opfylder kravene i ovenstående tjeks.
        else{
            return  $i;
        }
    }
   
}
