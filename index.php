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

var_dump($ritornoAlFuturo, $batman);

?>