<?php

class personne
{
    private $nom = "manu";
    private $age = 23;
     function sePresenter()
    {
        echo "Bonjour, je m'appelle $this->nom et j'ai $this->age ans.";
    }

}
$personne = new personne();
$personne->sePresenter();
?>


<?php

class Voiture
{
    private $marque;
    private $modele;
    private $annee;

    function __construct($marque, $modele, $annee)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    function afficherDetails()
    {
        echo "Marque : {$this->marque}, Modèle : {$this->modele}, Année : {$this->annee}\n";
    }
}

$voiture1 = new Voiture("Toyota", "Corolla", 2020);
$voiture2 = new Voiture("Honda", "Civic", 2018);

$voiture1->afficherDetails();
$voiture2->afficherDetails();

?>
