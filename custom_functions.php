<?php
// custom functions
function greetings(){
    echo "Good Morning Kiraiku<br>";
}

// call a funtion == use the function
// greetings();
// greetings();
// greetings();

function betterGreetings($name){
    // Check if AM or PM 
    $time = date("A");
    if ($time == "AM") 
        echo "Good morning $name<br>";
    else
    echo "Good afternoon $name <br>";
}

betterGreetings("Dean Ashton");
betterGreetings("Kelly Clarks");
betterGreetings("Noor Ahmed"); 

// Calculating of tax
function tax_calculator($salary) {
    if ($salary<= 24000) {
        $total_tax = 0.1 * $salary;
        return $salary - $total_tax;
    }
    elseif ($salary>24000) {
        $remainder1 = $salary - 24000;
        $total_tax = 24000*0.1;
        if ($remainder1<8333) {
            $total_tax += 0.25 * $remainder1;
        }else {
            $total_tax += 0.25* 8333;
            $total_tax += ($remainder1-8333) * 0.3;

        }

        return $salary-$total_tax;
    }

}

echo tax_calculator(200000);