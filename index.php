<?php
    // 1.) Definire la classe Movie                                               
    class Movie { 
    // 2.) Definire all'interno della classe le variabili d'istanza:       
        public $title;
        public $genre;
        private $length;
        private $rating;

    // 3.) Deve essere presente almeno una funzione:

    public function getLength($length) {
        return $this->length = $length;
    }

    public function setRating($rating) {

        if (is_numeric($rating)) { // Se il valore è passato è di tipo numerico
            $this->rating = $rating; // rating passa attraverso la funzione pubblica e diventa visibile
           
        } else { //se il valore passato non è di tipo numerico stampa in pagina ERRORE
            echo 'ERRORE!!!';
        }
        
    }


    }

    //Due istanze della stessa classe sono oggetti diversi, con stessa struttura - stesse proprietà - ma totalmente svincolate;
    
    // ------| ISTANZA MATRIX | ------ della classe Movie

    $matrix = new Movie ();
    $matrix->title = 'Matrix'; //le istanze sono dichiarate senza DOT NOTATION
    $matrix->genre = 'Action'; //in php viene utilizzata la freccia 
    $matrix->getLength('120m');
    $matrix->setRating(4.5);

    echo '<h1>Matrix</h1>';
    var_dump($matrix);
    echo '<hr>';

    // ------| ISTANZA RUSH | ------ della classe Movie

    $rush = new Movie ();
    $rush->title = 'Rush'; //le istanza sono dichiarate senza DOT NOTATION
    $rush->genre = 'Sport'; //in php viene utilizzata la freccia 
    $rush->getLength('90m');
    $rush->setRating(3.5);

    echo '<h1>Rush</h1>';
    var_dump($rush)



?>