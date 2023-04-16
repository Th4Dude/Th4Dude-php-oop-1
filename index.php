<?php

// classe Movie
class Movie {
    public $titolo;
    public $regista;
    public $genere;
    public $anno; 
    public $durata;      // variabili d'istanza

    // costruttore
    public function __construct($titolo, $regista, $genere, $anno, $durata) {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->genere = $genere;
        $this->anno = $anno;
        $this->durata = $durata;
    }









}






?>
