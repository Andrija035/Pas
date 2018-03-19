<?php

interface Napadac{
    function ugriz();
}
abstract class Pas{
    public $godine;
    public $pol;
    public $boja;
    public $vlasnik;
    public $ime;
    abstract function lavez();

    function podaci(){
        $podaci = ['godina' => $this->godine, 'pol' => $this->pol, 'boja' => $this->boja, 'vlasnik' => $this->vlasnik, 'ime' => $this->ime];
        return $podaci;
    }
}

class Pudlica extends Pas{
    function __construct($godine, $pol, $boja, $ime = 'nema ime', $vlasnik = 'nema vlasnika'){
        $this->godine = $godine;
        $this->pol = $pol;
        $this->boja = $boja;
        $this->vlasnik = $vlasnik;
        $this->ime = $ime;
    }
    function lavez(){
        echo 'av';
    }
    function oPsu(){
        echo "Godina psa: " . $this->podaci()['godina'] . '<br>';
        echo "Pol psa: " . $this->podaci()['pol'] . '<br>';
        echo "Boja psa: " . $this->podaci()['boja'] . '<br>';
        echo "Ime psa: " . $this->podaci()['ime'] . '<br>';
        echo "Vlasnik psa: " . $this->podaci()['vlasnik'] . '<br>';
    }
}

class Vucjak extends Pas implements Napadac{
    function __construct($godine, $pol, $boja, $ime = 'nema ime', $vlasnik = 'nema vlasnika'){
        $this->godine = $godine;
        $this->pol = $pol;
        $this->boja = $boja;
        $this->vlasnik = $vlasnik;
        $this->ime = $ime;
    }
    function lavez(){
        echo 'av';
    }
    function ugriz(){
        echo '* +3 damage protivniku *';
    }
    function oPsu(){
        echo "Godina psa: " . $this->podaci()['godina'] . '<br>';
        echo "Pol psa: " . $this->podaci()['pol'] . '<br>';
        echo "Boja psa: " . $this->podaci()['boja'] . '<br>';
        echo "Ime psa: " . $this->podaci()['ime'] . '<br>';
        echo "Vlasnik psa: " . $this->podaci()['vlasnik'] . '<br>';
    }
}

$pas1 = new Pudlica(2, 'm', 'bela', 'Rex', 'Djura');
$pas2 = new Vucjak(3, 'm', 'crveno-crna');
