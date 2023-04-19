<?php

declare(strict_types=1);

class Pont {
    // UNITE ne sert que dans la classe, on met cette propriété en privé.
    // De plus, elle est statique et ne varie pas.
    private const UNITE = 'm²';

    private float $longueur;
    private float $largeur;

    /************************** CONSTRUCTEUR ***********************************/
    public function __construct(float $longueur, float $largeur)
    {
        $this->setLongueur($longueur);
        $this->setLargeur($largeur);
    }

    /************************** SETTERS et GETTERS *****************************/
    public function setLongueur(float $longueur) : void {
        if ($longueur < 0) {
            trigger_error('La longueur ne doit pas être négative', E_USER_ERROR);
        }

        $this->longueur = $longueur;
    }

    public function getLongueur() : float {
        return $this->longueur;
    }

    public function setLargeur(float $largeur) : void {
        if ($largeur < 0) {
            trigger_error('La largeur ne doit pas être négative', E_USER_ERROR);
        }

        $this->largeur = $largeur;
    }

    public function getLargeur() : float {
        return $this->largeur;
    }

    // Calcul de la surface d'un pont
    public function getSurface() : string {
        return ($this->longueur * $this->largeur) . ' ' . self::UNITE;
    }
}

$towerBridge = new Pont(286.0, 15.0);
echo 'Le Tower Bridge a pour dimensions : ' . $towerBridge->getLongueur() . ' x ' . $towerBridge->getLargeur() . '<br />';

$manhattanBridge = new Pont(2089.0, 36.6);
echo 'Le Manhattan Bridge a pour dimensions : ' . $manhattanBridge->getLongueur() . ' x ' . $manhattanBridge->getLargeur() . '<br />';

echo 'La surface du Tower Bridge est de ' . $towerBridge->getSurface() . '<br />';
echo 'La surface du Manhattan Bridge est de ' . $manhattanBridge->getSurface();
