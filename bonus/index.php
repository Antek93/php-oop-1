<?php
// 1.) Definire la classe Movie                                               
class Movie
{
    // 2.) Definire all'interno della classe le variabili d'istanza:       
    public $title = 'Titolo del film'; //Impostato valore di DEFAULT, nel caso in cui il valore non venisse specificato succ..
    private $genre;
    private $length;
    private $rating;

    // 3.) Deve essere presente almeno un metodo:

    public function getLength($length)
    {
        return $this->length = $length;
    }

    public function setRating($rating = 0)
    { //Se non viene passato nessun valore, il valore di default è 0

        if (is_numeric($rating)) { // Se il valore è passato è di tipo numerico
            $this->rating = $rating; // rating passa attraverso la funzione pubblica e diventa visibile

        } else { //se il valore passato non è di tipo numerico stampa in pagina ERRORE
            echo 'ERRORE!!!';
        }
    }

    // 4.) All'interno della classe è presente almento un costruttore

    // ### Se si definisce un costruttore con UN argomento, quando si crea un'istanza si DEVE passare UN argomento
    public function __construct(array $_genre)
    {

        $this->genre = $_genre;
    }


    public function printMovie()
    { //Funzione per stampare in pagina
        echo '<h3>';
        echo $this->title;  // TITLE in H3
        echo '</h3>';

        echo '<hr>';

        echo '<div>';
        echo '<span>';
        echo 'Genere: ';
        echo '</span>';
        echo '<span>';
        foreach ($this->genre as $singleGenre) {
            echo '<div>';
            echo $singleGenre; // Ciclo per stampare tutti i generi presenti nell'array Genre
            echo '</div>';
        }
        echo '</span>';
        echo '</div>';


        echo '<div>';
        echo '<span>';
        echo 'Lunghezza: ';
        echo '</span>';
        echo '<span>';
        echo $this->length; // Lunghezza del film in Movie
        echo '</span>';
        echo '<div>';

        echo '<div>';
        echo '<span>';
        echo 'Voto: ';
        echo '</span>';
        echo '<span>';
        echo $this->rating; // Voto del film in Movie
        echo '</span>';
        echo '<div>';
    }
}

//Due istanze della stessa classe sono oggetti diversi, con stessa struttura - stesse proprietà - ma totalmente svincolate;

// ------| ISTANZA MATRIX | ------ della classe Movie

$matrix = new Movie(['Action', 'AI']);     // ### Se si definisce un costruttore con UN argomento, quando si crea un'istanza si DEVE passare UN argomento

$matrix->title = 'Matrix'; //le istanze sono dichiarate senza DOT NOTATION //in php viene utilizzata la freccia 
$matrix->getLength('120m');
$matrix->setRating(4.5);

echo '<h1>Matrix</h1>';
var_dump($matrix);
echo '<hr>';

$matrix->printMovie();

// ------| ISTANZA RUSH | ------ della classe Movie

$rush = new Movie(['Sport', 'Action']);     // ### Se si definisce un costruttore con UN argomento, quando si crea un'istanza si DEVE passare UN argomento

$rush->title = 'Rush'; //le istanza sono dichiarate senza DOT NOTATION //in php viene utilizzata la freccia 
$rush->getLength('90m');
$rush->setRating(3.5);

echo '<h1>Rush</h1>';
var_dump($rush);

$rush->printMovie();
