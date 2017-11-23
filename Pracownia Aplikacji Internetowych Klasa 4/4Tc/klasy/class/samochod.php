<?php

    class Samochod{
        public $marka, $model, $produkcja;
        
        function __construct($panstwo){ // musi byc w nawiasach podane przy tworzeniu!!
            $this->produkcja = $panstwo;
        }
        
        public function ustawMarke($wartosc){
            $this->marka = $wartosc;
        }
        
        public function pobierzMarke(){
            return $this->marka;
        }
        public function ustawModel($wartosc){
            $this->model = $wartosc;
        }
        
        public function pobierzModel(){
            return $this->model;
        }
        
        public function wyswietl(){
            echo<<<WYSWIETL
            Marka: $this->marka<br>
            Model: $this->model<br>
            Produkcja: $this->produkcja<br>
WYSWIETL;
        }
        
        public function wyswietlForeach(){
          echo "<ul>";
          
          foreach($this as $klucz => $wartosc){
            echo "<li> $klucz: $wartosc </li>";
          }
          
          echo "</ul>";
        }
      
    }

?>