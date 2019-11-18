<?php
echo "> hoeveel vrienden zal ik vragen om hun droom". PHP_EOL;
$aantalvrienden = readline("> ");
$totaal = 1;
$informatie = array(

);

    if (is_numeric($aantalvrienden)) {
        for ($tell = 1; $tell <= $aantalvrienden; $tell++) 
        { 
        echo "> Wat is je naam?" . PHP_EOL;
        $naam = readline("> ");
        
        echo "> Hoeveel dromen heb je?" . PHP_EOL;
        $aantaldromen = readline("> ");
            $bruh = array();

        for ($tell2 = 1; $tell2 <= $aantaldromen; $tell2++){
            echo "> wat is je droom man neef broer" . PHP_EOL;
            $dromen = Readline("> ");

            // 2. dtroom toevoegen an aray
           $bruh[] = $dromen;
        }
            $informatie[$naam] = $bruh;
        // 3.  arrayt koppelen aan naam     $informatie[$naam] = 
    } 
}
else
{
    exit("> '" . $aantalvrienden . "' is niet een nummer.");
}
// hey neef verleden daniel hier
// je moet die $informatie printen aitt laterr
// voor elke naam alles uitprinten
foreach($informatie as $naam => $array){
    foreach($array as $array => $inhoud){
    echo "> de droom van $naam is: $inhoud" . PHP_EOL;    
    }
}    
exit;