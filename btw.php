<?php

function btw($bedrag)
{   
    $btwPercentage=21;
    $tax=$bedrag*$btwPercentage/100;
    return $tax;
}
echo btw(50);

/////////////////////////////////////
echo"<br>";
////////////////////////////////////

function nettoBrutto($bedrag)
{   
    $btwPercentage=21;
    $tax=$bedrag*$btwPercentage/100;
    return $bedrag+$tax;
}
echo nettoBrutto    (50);


?>
