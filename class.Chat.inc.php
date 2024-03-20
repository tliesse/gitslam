<?php 

class Chat {
//va te faire foutre
    // champs, attributs, (propriétés PHP)
    private $nom;
    private $race;
    private $dateNaissance;
    private $cri;


    // constructeur 
    public function __construct(string $pNom, string $pRace, DateTime $pDateNaissance, string $pCri = 'Miaou')
    {
        $this->nom = $pNom;
        $this->race = $pRace;
        $this->dateNaissance = $pDateNaissance;
        $this->cri = $pCri;
    }



    // accesseurs  
    public function getNom(): string 
    {
        return $this->nom; 
    }

    public function getRace(): string
    {
        return $this->race;
    }

    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }

    public function getAge(): int 
    {
        // récupérer la date du jour
        $dateJour = new DateTime('now');

        // calculer la différence entre date de naissance et date du jour
        $difference = $this->dateNaissance->diff($dateJour);

        //retourner la différence en années
        return $difference->format('%y');
    }



    //  méthode

    /* 
    public function decrire(): string
    {
     // $this désigne l’objet courant, celui qui a reçu le message, dans notre exemple,
     return 'Le chat '.$this->nom.' a '.$this->getAge().' ans et est de race '.$this->race.'. Son cri est'.$this->cri;
    } 
    */

    public function decrire(): string
    {
    return sprintf('%s est un chat de %d ans, il est de race %s. Son cri est %s', $this->nom, $this->getAge(), $this->race, $this->cri);
    }   

} // fin de la classe

?>