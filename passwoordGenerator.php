<?php

function maakPaswoord()
{
    $pw_array=array();  ////Lege array

    ///////we gaan lijsten aanmaken met de chars die we nodig hebben
    $ar1=array(0,1,2,3,4,5,6,7,8,9);
    shuffle ($ar1);// me mixen de array door elkaar

    $ar2=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    shuffle ($ar2); // me mixen de array door elkaar

    $ar3=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    shuffle ($ar3); // me mixen de array door elkaar


    $alleChars = array_merge($ar1,$ar2,$ar3);  ///alles chars in 1 array
    shuffle ($alleChars); // We gaan alle chars shuffelen

    /*Nu gaan we de $pw_array opvullen ik wil van elk type minstens 1 char
    hebben dus de eerste drie elementen gaan we zelf invullen*/

    $pw_array[0]=$ar1[0];  //We nemen het eerste element van de geshuffelde 0-9 array. 
    $pw_array[1]=$ar2[0];  //We nemen het eerste element van de geshuffelde a-z array. 
    $pw_array[2]=$ar3[0];  //We nemen het eerste element van de geshuffelde A-Z array. 


    $pw_array[3]=$alleChars[0]; // een willekeurig charakter uit de alleChars array

    shuffle ($alleChars); // We gaan alle chars shuffelen
    $pw_array[4]=$alleChars[0]; 

    shuffle ($alleChars); // We gaan alle chars shuffelen
    $pw_array[5]=$alleChars[0]; 

    shuffle ($alleChars); // We gaan alle chars shuffelen
    $pw_array[6]=$alleChars[0]; 

    shuffle ($alleChars); // We gaan alle chars shuffelen
    $pw_array[7]=$alleChars[0]; 


    ////Nu hebben we 8 char in onze array. We gaan deze nog eens shuffelen
    shuffle($pw_array);

    /// van de array gaan we een string maken
    $pw=implode("",$pw_array); 

    //resultaat
    return $pw;
}


echo maakPaswoord();
?>
