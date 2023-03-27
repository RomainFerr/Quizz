<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['questions','par_themes'])]

    private ?string $intitule = null;

    #[ORM\Column(type: Types::ARRAY)]
    #[Groups(['questions','par_themes'])]

    private array $reponses = [];

    #[ORM\Column(length: 255)]
    #[Groups(['questions','par_themes'])]

    private ?string $bonnereponse = null;

    #[ORM\ManyToOne(inversedBy: 'Questions')]
    #[Groups(['questions','par_themes'])]

    private ?Theme $theme = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getReponses(): array
    {
        return $this->reponses;
    }

    public function setReponses(array $reponses): self
    {
        $this->reponses = $reponses;

        return $this;
    }

    public function getBonnereponse(): ?string
    {
        return $this->bonnereponse;
    }

    public function setBonnereponse(string $bonnereponse): self
    {
        $this->bonnereponse = $bonnereponse;

        return $this;
    }

    public function getTheme(): ?Theme
    {
        return $this->theme;
    }

    public function setTheme(?Theme $theme): self
    {
        $this->theme = $theme;

        return $this;
    }
}
