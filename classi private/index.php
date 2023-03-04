<?php

// CLASSE DICHIARATA CON VARIABILI D'ISTANZA PRIVATE

    class Movie { 
        private $title;
        private $genre;
        private $length;
        private $rating;

        // SETTER: creiamo un metodo PUBBLICO per modificare le variabili

        public function setVariables($title, $genre, $length, $rating) {
            $this->title = $title;
            $this->genre = $genre;
            $this->length = $length;
            $this->rating = $rating;

        // le variabili passano come argomento all'interno della funzione

        }
    }

    
    // pertanto, per dichiarare una nuova istanza è necessario richiamare la funzione SETTER e specificare le variabili d'istanza come argomento
    $matrix = new Movie ();
    $matrix->setVariables('Matrix','Action','120m', 4.5);

    echo '<h1>Matrix</h1>';
    var_dump($matrix);


    $rush = new Movie ();
    $rush->setVariables(
        'Rush', //$title
        'Sport', //$genre
        '90m', //$length
        3.5 //$rating
    );

    echo '<h1>Rush</h1>';
    var_dump($rush)



?>