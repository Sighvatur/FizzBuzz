#!/bin/bash
for ((i=1;i< 101;i++)); do
    if  (( i % 3 == 0)) &&  (( i % 5 == 0)); then
        echo FizzBuzz
    elif ((i%3 == 0)); then
        echo Fizz
    elif ((i%5 == 0)); then
        echo Buzz
    else
        echo $i
    fi;
done 