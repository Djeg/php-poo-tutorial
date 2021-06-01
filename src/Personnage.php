<?php

class Personnage
{
    private int $vie;

    private int $attaque;

    private int $magie;

    private string $nom;

    public function __construct(
        string $nom,
        int $vie = 100,
        int $attaque = 20,
        int $magie = 30
    ) {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
        $this->magie = $magie;
    }

    public function regenerer(int $vie = 20): void
    {
        $this->vie += $vie;
    }

    public function afficher(): string
    {
        return "Nom: {$this->nom}, Vie: {$this->vie}, Attaque: {$this->attaque}";
    }

    public function attaque(Personnage $cible): void
    {
        $cible->vie -= $this->attaque;
    }

    public function soigne(Personnage $cible): void
    {
        $cible->regenerer($this->magie);
    }
}
