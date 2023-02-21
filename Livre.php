<?php

class Livre
{
    private string $titre;
    private string $genre;
    private int $nbpage;


    public function __construct($titre, $genre, $nbpage)
    {
        $this->titre = $titre;
        $this->genre = $genre;
        $this->nbpage = $nbpage;

    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    public function getNbpage(): int
    {
        return $this->nbpage;
    }

    public function setNbpage(int $nbpage): void
    {
        $this->nbpage = $nbpage;
    }


}