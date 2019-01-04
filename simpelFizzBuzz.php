<?php

// Der bruges 101 som maks og ikke 100 da vi starter fra "1" og ikke "0" og vi derfor ville mangle at tjekke for det sidste tal i rækken (100).
for($i = 1; $i < 101; $i++){
    /**
    Tjek for at tallet kan divideres med 3 og 5 uden restprodukt, for at give "FizzBuzz".
    Man kunne også tjekke om tallet kan divideres med 15, da både 3 og 5 går op i 15. Derved kunne && (AND) operatoren spares.
    Jeg valgte dog at tjekke for både 3 og 5, således det er mere letlæseligt.
    Der testes for "FizzBuzz" først da der ellers kommer fejl.
    **/
    if( $i % 3 == 0 && $i % 5 == 0){
	   echo("FizzBuzz");
    }
    // Tjek for at tallet kan divideres med 3 uden restprodukt, for at give "Fizz".
	else if( $i % 3 == 0){
	   echo("Fizz");
	}
    // Tjek for at tallet kan divideres med 5 uden restprodukt, for at give "Buzz".
	else if( $i % 5 == 0){
        echo("Buzz");
	}
    // Output de tal der ikke opfylder kravene i ovenstående tjeks.
	else{
        echo($i);
	}
    // Tilføj komma som det er mere letlæseligt.
    echo(", ");
}

