<?php
global $temperatures;
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
function showCountries(){
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
        "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
        "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
        "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

    ksort($ceu,);
    echo "\n";
    foreach ($ceu as $key => $val) {
    echo  "La capital de $key es: $val\n";
    }
}

function showAvgTemperatures(){
    global $temperatures;
    
    $sum = array_sum($temperatures);
    $average = $sum / count($temperatures);
    echo "\nLa temperatura promedio es: $average\n";

    $num = 0;
    foreach ($temperatures as $key => $val) {
    }
}
function showHighestTemp(){
    global $temperatures;
    $temperaturesArray = array_unique($temperatures);
    rsort($temperaturesArray);
    $highTemperatures = array_slice($temperaturesArray, 0, 5);
    echo "----------------------------------------------\nHighest Temperatures\n----------------------------------------------\n";
    foreach ($highTemperatures as $temperature) {
        echo $temperature. "\n";
    }
    
}
function showLowestTemp(){
global $temperatures;
$temperaturesArray = array_unique($temperatures);
sort($temperaturesArray);
$lowestTemperatures = array_slice($temperaturesArray, 0, 5);
echo "Lowest Temperatures\n----------------------------------------------\n";
foreach ($lowestTemperatures as $temperature) {
    echo $temperature. "\n";
}
}
function main(){
    showCountries();
    echo "------------------------------------------------------- 
    TEMPERATURES
-------------------------------------------------------";
    
    showAvgTemperatures();
    showHighestTemp();
    showLowestTemp();
}

main();




