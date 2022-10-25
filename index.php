<?php

/*- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà*/

class Movie {

    public $title;
    public $movieDirector;
    public $mainActor;
    public $exitDate;


    //COSTRUTTORE

    function __construct($title , $movieDirector , $mainActor , $exitDate) {
        $this->title = $title;
        $this->movieDirector = $movieDirector;
        $this->mainActor = $mainActor;
        $this->exitDate = $exitDate;
    }

    //METODO

    public function info() {
        echo '<h2>'. 'Title:' .$this->title . '</h2>';
        echo '<h3>'. 'Movie Director:'. $this->movieDirector . '</h3>';
        echo '<h3>'. 'Main Actor:' .$this->mainActor . '</h3>';
        echo '<h4>'. 'Exit Date:' . $this->exitDate . '</h4>';
        echo '<hr>';
        
    }


}   

$topgun = new Movie('Top Gun', 'Tony Scott','Tom Cruise','1986');
$topgun2 = new Movie('Top Gun Maverick', 'Joseph Kosinski','Tom Cruise','2022');
$prey = new Movie('Prey', 'Dan Trachtenberg','Amber Midthunder','2022');
$prey = new Movie('Prey', 'Dan Trachtenberg','Amber Midthunder','2022');
$thegrayman = new Movie('The Grey Man','Anthony Russo','Ryan Gosling','2022');


$topgun->info();
$topgun2->info();
$prey->info();
$thegrayman->info();




?>