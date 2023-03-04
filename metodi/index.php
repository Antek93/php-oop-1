<?php
    class Movie { 
        public $title;
        public $genre;
        public $length;
        private $rating;

        //Aggiungere delle funzioni ci permette di eseguire dei controlli

        public function setRating($rating) {

            if (is_numeric($rating)) { // Se il valore è passato è di tipo numerico
                $this->rating = $rating; // rating passa attraverso la funzione pubblica e diventa visibile
                echo "RATING E' UN NUMERO";
               
            } else { //se il valore passato non è di tipo numerico stampa in pagina ERRORE
                echo 'ERRORE!!!';
            }
            
        } 
    }


    $matrix = new Movie ();
    $matrix->title = 'Matrix';
    $matrix->genre = 'Action';
    $matrix->length = '120m';
    $matrix->setRating(4.5); //VALORE NUMERICO OK - STAMPA IN PAGINA "RATING E' UN NUMERO"

    echo '<h1>Matrix</h1>';
    var_dump($matrix);
    echo '<hr>';

    $rush = new Movie ();
    $rush->title = 'Rush';
    $rush->genre = 'Sport';
    $rush->length = '90m';
    $rush->setRating('3,5'); //VALORE NUMERICO NULL - STAMPA IN PAGINA "ERRORE!!!"

    echo '<h1>Rush</h1>';
    var_dump($rush)

?>