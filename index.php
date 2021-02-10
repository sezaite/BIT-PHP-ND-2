<h1>Namu darbai Arrays</h1>

<?php

echo '<br><br><br>--PIRMA UZDUOTIS--<br><br><br>';
$vardas= 'Courtney';
$pavarde= 'Love';

echo strlen($vardas) > strlen($pavarde) ? $pavarde : $vardas;

echo '<br><br><br>--ANTRA UZDUOTIS--<br><br><br>';


echo strtoupper($vardas) . " " . strtolower($pavarde); 

echo '<br><br><br>--TRECIA UZDUOTIS--<br><br><br>';

echo substr($vardas, 0, 1) . substr($pavarde, 0, 1);

//arba
echo '<br>';
echo $vardas[0] . $pavarde[0];

//arba pagal uzduoti:
echo '<br>';
$trecias = $vardas[0] . $pavarde[0];
echo $trecias;

echo '<br><br><br>--KETVIRTA UZDUOTIS--<br><br><br>';

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$trecias = substr($vardas, -3) . substr($pavarde, -3);
echo $trecias;

echo '<br><br><br>--PENKTA UZDUOTIS--<br><br><br>';

$stringas = 'An American in Paris';
$regexas = "/[a]/i";
echo preg_replace($regexas, "*", $stringas);
echo '<br>';

//trumpesnis 
echo preg_replace('/[a]/i', '*', 'An American in Paris');

echo '<br><br><br>--SESTA UZDUOTIS--<br><br><br>';

$stringas = 'An American in Paris';
$regexas = "/[a]/i";
echo 'is viso a raidziu: ' . preg_match_all($regexas, $stringas);

echo '<br>';

//viena eilute:

echo 'is viso a raidziu: ' . preg_match_all("/[a]/i", 'An American in Paris');

echo '<br><br><br>--SEPTINTA UZDUOTIS--<br><br><br>'; 

$filmas1 ='An American in Paris';
$filmas2 = "Breakfast at Tiffany's";
$filmas3 =  '2001: A Space Odyssey';
$filmas4 = "It's a Wonderful Life";
$patterns = '/[aeiuoy]/i';
$replace = '';

$filmai = array($filmas1, $filmas2, $filmas3, $filmas4);
for ($i = 0; $i < count($filmai); $i++){
    echo preg_replace($patterns, $replace, $filmai[$i]);
    echo '<br>';
}

// $filmas = 'filmas';
// for ($i = 1; $i < 5; $i++){
//     $filmas = $$filmas.$i;
//     echo preg_replace($patterns, $replace, $filmas); 
// };

echo '<br><br><br>--ASTUNTA UZDUOTIS--<br><br><br>'; 

$stringas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

$patternas = '/[^0-9]/';
echo $stringas;
echo '<br>';
echo preg_replace($patternas, "", $stringas);


echo '<br><br><br>--DEVINTA UZDUOTIS--<br><br><br>'; 

$pirmasStringas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$antrasStringas = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$pirmasArray = explode(" ", $pirmasStringas);
$pirmosArraySkaiciai = 0;
$antrasArray = explode(" ", $antrasStringas);
$antrosArraySkaiciai = 0;

echo 'pirmojo stringo zodziai, sudaryti is penkiu raidziu arba trumpesni: <br>';
for ($i = 0; $i < count($pirmasArray); $i++){
    if (strlen($pirmasArray[$i]) <= 5){
        echo $pirmasArray[$i] . '<br>';
        $pirmosArraySkaiciai++;
    } 
}

echo "- is viso $pirmosArraySkaiciai zodziu <br><br>";
echo 'antrojo stringo zodziai, sudaryti is penkiu raidziu arba trumpesni: <br>';

for ($i = 0; $i < count($antrasArray); $i++){
    if (strlen($antrasArray[$i]) <= 5){
        echo $antrasArray[$i] . '<br>';
        $antrosArraySkaiciai++;
    } 
}

echo "- is viso $antrosArraySkaiciai zodziai <br>";

echo '<br><br><br>--DESIMTA UZDUOTIS--<br><br><br>'; 

echo chr(rand(97, 122)) . chr(rand(97, 122)) . chr(rand(97, 122));
// echo str_repeat(chr(rand(97, 122)), 3);

echo '<br><br><br>--VIENUOLIKTA UZDUOTIS--<br><br><br>'; 

$pirmasStringas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$antrasStringas = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$bendrasArray = array_merge(explode(" ", $pirmasStringas), explode(" ", $antrasStringas));
$naujasArray = array();


while (count($naujasArray) < 10) {
    $randomZodis = $bendrasArray[rand(0, (count($bendrasArray) - 1))];
        if(!in_array($randomZodis, $naujasArray)){
            array_push($naujasArray, $randomZodis);
        }
    }

$galutinisStringas = implode(" ", $naujasArray);
echo $galutinisStringas;

?>