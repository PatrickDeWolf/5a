<?php


function gemiddelde($lijst)
{
    $teller=0;
    for($x=0; $x<count($lijst); $x++)
    {
        $teller=$teller + $lijst[$x];
    }

    return $teller/ count($lijst);
}



$puntenlijst=array(3,8,4,6,7,10,0,5,9,8,2,4,2,5,8,8,0,3,8,9,7,7,8,9,10,3,2,8,9);

echo"puntenlijst:<br>";
echo implode("<br>", $puntenlijst);
echo"<br><br>";

echo"gemiddelde: ";
echo gemiddelde($puntenlijst);



/// EXTRA ceil() is naar boven afronden en floor() is naar onderen afronden


?>
