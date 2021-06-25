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
    public $mainActors;
    public $boxOffice;
    public $poster;
    public $purchase = false;

    
    /**
     * Undocumented function
     *
     * @param string $Is_purchase == 'Yes' or 'No'
     * @return boolean
     */
    public function is_Purchase($Is_purchase)
    {   
        if ($Is_purchase == "Yes"){
            return $this->purchase = true;
        } else {
            return $this->purchase = false;
        }    
    } 
}

// Test function is_Purchase()

/* $MissionImpossible = new Movies_one();
$MissionImpossible->title = 'mission impossible';
$MissionImpossible->is_Purchase('No');
var_dump($MissionImpossible->purchase);
$MissionImpossible->is_Purchase('Yes');
var_dump($MissionImpossible->purchase); */

////////////////////////////////////////////////////////////////////////////////////////
class Movies_two{

    public $title;
    public $overview;
    public $year;
    public $genre;
    public $mainActors;
    public $boxOffice;
    public $poster;

    /**
     * Undocumented function
     *
     * @param string $title
     * @param string $overview
     * @param integer $year
     * @param string $genre
     * @param string $mainActors
     * @param int $boxOffice
     * @param string $poster
     */
     function __construct(string $title, string $overview, int $year, string $genre, string $mainActors, string $boxOffice, string $poster) {
        $this->title = $title;
        $this->overview = $overview;
        $this->year = $year;
        $this->genre = $genre;
        $this->mainActors = $mainActors;
        $this->boxOffice = $boxOffice;
        $this->poster = $poster;
    }

}
?>