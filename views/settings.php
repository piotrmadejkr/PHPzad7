<?php
session_start();
error_reporting(0);


$artykul = array();

$artykul[] = ['tytul' => 'Ala ma kota', 'link' => 'http://www.onet.pl', 'opis' => 'lorem  ', 'zdjecie' => 'img/art.jpg', 'ocena' => '4', 'ikona' => '@'];
$artykul[] = ['tytul' => 'pies', 'link' => 'http://www.onet.pl', 'opis' => 'lorem1  ', 'zdjecie' => 'img/art1.jpg', 'ocena' => '3', 'ikona' => '#'];
$artykul[] = ['tytul' => 'slon', 'link' => 'http://www.onet.pl', 'opis' => 'lorem 2 ', 'zdjecie' => 'img/art2.jpg', 'ocena' => '5', 'ikona' => '%'];
$artykul[] = ['tytul' => 'jez', 'link' => 'http://www.onet.pl', 'opis' => 'lorem 3 ', 'zdjecie' => 'img/art3.jpg', 'ocena' => '2', 'ikona' => '&'];
$artykul[] = ['tytul' => 'wilk', 'link' => 'http://www.onet.pl', 'opis' => 'lorem4  ', 'zdjecie' => 'img/art4.jpg', 'ocena' => '3', 'ikona' => '('];
$artykul[] = ['tytul' => 'wiewiorka', 'link' => 'http://www.onet.pl', 'opis' => 'lorem5  ', 'zdjecie' => 'img/ar5.jpg', 'ocena' => '4', 'ikona' => ')'];




echo '<pre>';
print_r($artykul);
echo '</pre>';


echo $artykul[2]['tytul'];
// 1. wypisz wszystkie tytuly wpisow;

echo '<hr>2.<br>';

// 2. obok tytulu wyswietl tyle gwiazdek * ile liczy stopień (np4  ****);
// wika ocena 3; - to zrobilismy ponizej 




for ($i=0; $i<count($artykul); $i++) {

    echo $artykul[$i]['tytul'].' ,ocena: '.$artykul[$i]['ocena'].'<br>';


}
echo ' <hr>3. <br>';
//3. tutaj dodajemy gwiazdki.
// dodawanie w tym przypadku to wypisanie czegokolwiek razy tyle ile jest w petli.

for ($i=0; $i<count($artykul); $i++) {
       
    echo $artykul[$i]['tytul'].' ,ocena: '.$artykul[$i]['ocena'].gwiazdki($artykul[$i]['ocena']).'<br>'; 
}

function gwiazdki($x) {
    
    for($z=0; $z<$x; $z++) {
    $k = $k.'*';
    }
return $k;

}

echo '<hr>4. <br>';

// teraz to samo tylko nie uzywamy funckji - czyli tutaj zniknal wers function gwiazdki($x) - for zostalo i musielismy uzupelnic je o ilosc iteracji ktora podawala funkcja gaiwzdki (weszlo w for ( ...; z< tu ; ...))

for ($i=0; $i<count($artykul); $i++) {     
    echo $artykul[$i]['tytul'].' ,ocena:';
    
    
    for($z=0; $z<$artykul[$i]['ocena']; $z++) {
        echo '*';
    }
    
    echo '<br>';
}

echo '<hr>5. <br>';

//5. Do kazdego z $artykulow a) dodaj jego ikonę b) ikona ma zajac miejsce gwiazdki przy wyswietlaniu przy ocenie  (ikona = tutaj jakikolwiek znak z klawiatury);

for ($i=0; $i<count($artykul); $i++) {
       
    for($z=0; $z<$artykul[$i]['ocena']; $z++) {
    echo $artykul[$i]['tytul'].' ,ocena: '.$artykul[$i]['ocena'].ikony($artykul[$i]['ocena'],$artykul[$i]['ikona']).'<br>'; 
}
}


function ikony($iteracja,$zawartosc) {
    
    for($z=0; $z<$iteracja; $z++) {
    $k .= $zawartosc;
    }
return $k;

}


echo '<hr>';
echo ikony(12,'nie bedzie odpisywał<br>');
?>






