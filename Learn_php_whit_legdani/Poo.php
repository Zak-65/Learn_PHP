<?php 
class Utilisateur {
    static $pays = "maroc";
    protected $nom;
    public $prenom;
    public function __construct($nom,$p){
        $this->nom = $nom;
        $this->prenom = $p;
    }
    public function get(){
        return $this->nom;
    }
    public function set($a){
        $this->nom = $a ;
    }
}

$utilisateur = new Utilisateur("sidkii","zakaria");
$utilisateur->set("sidqui"); 
// $utilisateur->prenom = "zakaria";

var_dump ($utilisateur);

class Etudiants extends Utilisateur{
    public $branche;
    public $groupe;
    function __construct($nom,$prenom,$branche,$groupe){
        parent::__construct($nom,$prenom);
        $this->branche = $branche;
        $this->groupe = $groupe;
    }
} 

$etudiants1 = new Etudiants("marzoug","khalid","py","dd105");
echo ('<br>');
var_dump($etudiants1);
echo('<br>');
echo(Utilisateur::$pays);

