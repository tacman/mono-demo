<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TermRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TermRepository::class)]
#[ApiResource]
class Term
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'terms')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Official $offical = null;

    #[ORM\Column(length: 16, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 2, nullable: true)]
    private ?string $stateAbbreviation = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $party = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $district = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $startDate = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $endDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOffical(): ?Official
    {
        return $this->offical;
    }

    public function setOffical(?Official $offical): static
    {
        $this->offical = $offical;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getStateAbbreviation(): ?string
    {
        return $this->stateAbbreviation;
    }

    public function setStateAbbreviation(?string $stateAbbreviation): static
    {
        $this->stateAbbreviation = $stateAbbreviation;

        return $this;
    }

    public function getParty(): ?string
    {
        return $this->party;
    }

    public function setParty(?string $party): static
    {
        $this->party = $party;

        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): static
    {
        $this->district = $district;

        return $this;
    }

    public function getStartDate(): ?\DateTimeImmutable
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeImmutable $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeImmutable
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeImmutable $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }
}
