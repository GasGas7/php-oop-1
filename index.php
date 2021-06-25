<!-- -
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

require __DIR__ . '/classes/movies.php';

/* ####### With first class movies ####### */
$ritornoAlFuturo = new Movies_one();
$ritornoAlFuturo->title = "Ritorno Al Futuro";
$ritornoAlFuturo->overview = 'Il diciottenne Marty ha come amico un bislacco scienziato che ha inventato una macchina per viaggiare nel tempo. Grazie ad essa Marty tornerà indietro nel tempo, fino al 1955.';
$ritornoAlFuturo->year = 1985;
$ritornoAlFuturo->genre = 'Comedy';
$ritornoAlFuturo->boxOffice = 210 . 'billion';
$ritornoAlFuturo->poster = 'https://m.media-amazon.com/images/I/61ZEcXTypgS._AC_SY606_.jpg';
$ritornoAlFuturo->is_Purchase('No');

$batman = new Movies_one();
$batman->title = "Batman - Il Cavaliere Oscuro";
$batman->overview = "Batman e Jim Gordon si alleano con il nuovo procuratore di Gotham City, Harvey Dent, per combattere il crimine organizzato che dilaga in città e fermare un pericoloso rapinatore, il Joker, che ha gettato la città nell'anarchia";
$batman->year = 2008;
$batman->genre = 'Action/Adventure';
$batman->boxOffice = 1.005 . 'billion';
$batman->poster = 'https://images-na.ssl-images-amazon.com/images/I/71orNWLau5L._AC_SY606_.jpg';
$batman->is_Purchase('Yes');

#var_dump($ritornoAlFuturo, $batman);

/* ####### /With first class movies ####### */

/* ####### With second class movies ####### */

$films = [
    new Movies_two('Venom', "Eddie Brock, giornalista, svolge indagini sulle poco chiare sperimentazioni condotte da una torbida organizzazione denominata Life Foundation. L'uomo, però, viene contaminato da una forma di vita aliena.", 2008, 'Action/Sci-fi', 856.1 . 'million', 'https://www.justnerd.it/wp-content/uploads/2018/08/venom-poster-giapponese.jpg'),

    new Movies_two('Spiderman', "Il morso di un ragno mutante dona degli incredibili, e inaspettati, poteri al giovane Peter Parker, che li usa nella guerra contro un minaccioso nemico.", 2002, 'Action/Sci-fi', 856.1 . 'million', 'https://metropolitanmagazine.it/wp-content/uploads/2021/04/spider-man-tobey-maguire.jpg'),

    new Movies_two('Venom', "Eddie Brock, giornalista, svolge indagini sulle poco chiare sperimentazioni condotte da una torbida organizzazione denominata Life Foundation. L'uomo, però, viene contaminato da una forma di vita aliena.", 2008, 'Action/Sci-fi', 825 . 'million', 'https://www.justnerd.it/wp-content/uploads/2018/08/venom-poster-giapponese.jpg')

    ];

#var_dump($films);

/* ####### /With second class movies ####### */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILMS</title>
</head>
<body>
    
</body>
</html>