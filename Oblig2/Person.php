<?php
/**
 * Created by PhpStorm.
 * User: catoh
 * Date: 26.02.2018
 * Time: 16:38
 */

class Person{

    protected $fornavn;
    protected $etternavn;
    protected $adresse;
    protected $postnr;
    protected $poststed;
    protected $telefonnr;
    public $Ovelse;

    function __construct($fornavn, $etternavn, $adresse, $postnr, $poststed, $telefonnr, $Ovelse){
        $this->fornavn = $fornavn;
        $this->etternavn = $etternavn;
        $this->adresse = $adresse;
        $this->postnr = $postnr;
        $this->poststed = $poststed;
        $this->telefonnr = $telefonnr;
        $this->Ovelse = $Ovelse;
    }

    public function toString(){
        return "<br/>"."Navn: ".$this->fornavn." ".$this->etternavn."<br/>"
            ."Adresse: ".$this->adresse."<br/>"
            ."Poststed: " .$this->postnr." ".$this->poststed."<br/>"
            ."Telefonnummer: ".$this->telefonnr."<br/>"
            ."Øvelsen du har valgt er: ".$this->Ovelse->getType() ."<br/>"
            ."Stedet du skal være er: ".$this->Ovelse->getSted()."<br/><br/>"
            ."Datoen og klokkeslett for din registrering/bestilling er: "."<br/>".$this->Ovelse->getDato()."<br/>" .$this->Ovelse->getKlokke()."<br/><br/>";

    }

    public function setFornavn($fornavn){
        $this->fornavn = $fornavn;
    }

    public function setEtternavn($etternavn){
        $this->etternavn = $etternavn;
    }

    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function setPostnr($postnr){
        $this->postnr = $postnr;
    }

    public function setPoststed($poststed){
        $this->poststed = $poststed;
    }

    public function setTelefonnr($telefonnr){
        $this->telefonnr = $telefonnr;
    }

    public function getFornavn(){
        return $this->fornavn;
    }

    public function getEtternavn(){
        return $this->etternavn;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function getPostnr(){
        return $this->postnr;
    }

    public function getPoststed(){
        return $this->poststed;
    }

    public function getTelefonnr(){
        return $this->telefonnr;
    }
}