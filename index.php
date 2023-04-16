<?php

// classe Movie
class Movie {
    public $titolo;
    public $regista;
    public $genere;
    public $anno; 
    public $durata;      // variabili d'istanza

    // costruttore
    public function __construct($regista,$titolo,  $genere, $durata,  $anno,) {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->genere = $genere;
        $this->anno = $anno;
        $this->durata = $durata;
    }

    // metodo
    public function info() {
        return "Con Regista {$this->regista} esce '{$this->titolo}' dal genere {$this->genere} della durata di '{$this->durata}' nell'anno{$this->anno} .";
    }

}









?>
