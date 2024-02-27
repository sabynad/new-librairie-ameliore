<?php

namespace App\Entity;

use App\Repository\LivresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivresRepository::class)]
class Livres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"Id_Livre", type: 'integer')]  
    private ?int $Id_Livre = null;

    #[ORM\Column(length: 50)]
    private ?string $isbn = null;

    #[ORM\Column(length: 50)]
    private ?string $titre_livre = null;

    #[ORM\Column(length: 50)]
    private ?string $theme_livre = null;

    #[ORM\Column(length: 255)]
    private ?string $nbr_pages_livre = null;

    #[ORM\Column(length: 50)]
    private ?string $format_livre = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_auteur = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom_auteur = null;

    #[ORM\Column(length: 50)]
    private ?string $editeur = null;

    #[ORM\Column(length: 50)]
    private ?string $annee_edition = null;

    #[ORM\Column(length: 50)]
    private ?string $prix_vente = null;

    #[ORM\Column(length: 50)]
    private ?string $langue_livre = null;

    public function getId(): ?int
    {
        return $this->Id_Livre;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): static
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getTitreLivre(): ?string
    {
        return $this->titre_livre;
    }

    public function setTitreLivre(string $titre_livre): static
    {
        $this->titre_livre = $titre_livre;

        return $this;
    }

    public function getThemeLivre(): ?string
    {
        return $this->theme_livre;
    }

    public function setThemeLivre(string $theme_livre): static
    {
        $this->theme_livre = $theme_livre;

        return $this;
    }

    public function getNbrPagesLivre(): ?string
    {
        return $this->nbr_pages_livre;
    }

    public function setNbrPagesLivre(string $nbr_pages_livre): static
    {
        $this->nbr_pages_livre = $nbr_pages_livre;

        return $this;
    }

    public function getFormatLivre(): ?string
    {
        return $this->format_livre;
    }

    public function setFormatLivre(string $format_livre): static
    {
        $this->format_livre = $format_livre;

        return $this;
    }

    public function getNomAuteur(): ?string
    {
        return $this->nom_auteur;
    }

    public function setNomAuteur(string $nom_auteur): static
    {
        $this->nom_auteur = $nom_auteur;

        return $this;
    }

    public function getPrenomAuteur(): ?string
    {
        return $this->prenom_auteur;
    }

    public function setPrenomAuteur(string $prenom_auteur): static
    {
        $this->prenom_auteur = $prenom_auteur;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(string $editeur): static
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getAnneeEdition(): ?string
    {
        return $this->annee_edition;
    }

    public function setAnneeEdition(string $annee_edition): static
    {
        $this->annee_edition = $annee_edition;

        return $this;
    }

    public function getPrixVente(): ?string
    {
        return $this->prix_vente;
    }

    public function setPrixVente(string $prix_vente): static
    {
        $this->prix_vente = $prix_vente;

        return $this;
    }

    public function getLangueLivre(): ?string
    {
        return $this->langue_livre;
    }

    public function setLangueLivre(string $langue_livre): static
    {
        $this->langue_livre = $langue_livre;

        return $this;
    }
}
