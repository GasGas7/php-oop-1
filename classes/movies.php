<!-- 
    
E' definita una classe ‘Movie’:

=> all'interno della classe sono dichiarate delle variabili d'istanza ✔
=> all'interno della classe è definito un costruttore ✔
=> all'interno della classe è definito almeno un metodo
 -->
<?php 

class Movies_one
{
    public $title;
    public $overview;
    public $year;
    public $genre;
    public $boxOffice;
    public $poster;
    public $purchase = 'No';

    
    /**
     * Undocumented function
     *
     * @param boolean $Is_purchase == 'true'  or 'false'
     * @return boolean
     */
    public function is_Purchase($Is_purchase)
    {   
        if ($Is_purchase == true){
            return $this->purchase = 'Yes';
        } else {
            return $this->purchase = 'No';
        }    
    } 
}

// Test function is_Purchase()

/* $MissionImpossible = new Movies_one();
$MissionImpossible->title = 'mission impossible';
$MissionImpossible->is_Purchase(false);
var_dump($MissionImpossible->purchase);
$MissionImpossible->is_Purchase(true);
var_dump($MissionImpossible->purchase); */

////////////////////////////////////////////////////////////////////////////////////////
class Movies_two{

    public $title;
    public $overview;
    public $year;
    public $genre;
    public $boxOffice;
    public $poster;

    /**
     * Undocumented function
     *
     * @param string $title
     * @param string $overview
     * @param integer $year
     * @param string $genre
     * @param int $boxOffice
     * @param string $poster
     */
     function __construct(string $title, string $overview, int $year, string $genre, string $boxOffice, string $poster) {
        $this->title = $title;
        $this->overview = $overview;
        $this->year = $year;
        $this->genre = $genre;
        $this->boxOffice = $boxOffice;
        $this->poster = $poster;
    }

}
?>