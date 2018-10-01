<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CastingFormRepository")
 * @ApiResource(normalizationContext={"groups"={"form"}})
 */
class CastingForm
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("form")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("form")
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("form")
     */
    private $Surname;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("form")
     */
    private $sex;

    /**
     * @ORM\Column(type="string", length=16)
     * @Groups("form")
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=128)
     * @Groups("form")
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     * @Groups("form")
     */
    private $birthDate;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("form")
     */
    private $placeOfResidence;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("form")
     */
    private $nationality;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("form")
     */
    private $portfolioLink;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups("form")
     */
    private $shortDescription;

    /**
     * @ORM\Column(type="boolean")
     * @Groups("form")
     */
    private $approvalClause;

    /**
     * @ORM\Column(type="array", nullable=true)
     * @Groups("form")
     */
    private $images = [];

    /**
     * @ORM\Column(type="json_array", nullable=true)
     * @Groups("form")
     */
    private $dimensions;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     * @Groups("form")
     */
    private $body;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     * @Groups("form")
     */
    private $face;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     * @Groups("form")
     */
    private $hair;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     * @Groups("form")
     */
    private $skills;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups("form")
     */
    private $additionalInformation;

    /**
     * @ORM\Column(type="boolean")
     */
    private $approvalProcessing;

    /**
     * @ORM\Column(type="integer")
     * @Groups("form")
     */
    private $castingCategory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->Surname;
    }

    public function setSurname(string $Surname): self
    {
        $this->Surname = $Surname;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getPlaceOfResidence(): ?string
    {
        return $this->placeOfResidence;
    }

    public function setPlaceOfResidence(string $placeOfResidence): self
    {
        $this->placeOfResidence = $placeOfResidence;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getPortfolioLink(): ?string
    {
        return $this->portfolioLink;
    }

    public function setPortfolioLink(?string $portfolioLink): self
    {
        $this->portfolioLink = $portfolioLink;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getApprovalClause(): ?bool
    {
        return $this->approvalClause;
    }

    public function setApprovalClause(bool $approvalClause): self
    {
        $this->approvalClause = $approvalClause;

        return $this;
    }

    public function getApprovalProcessing(): ?bool
    {
        return $this->approvalProcessing;
    }

    public function setApprovalProcessing(bool $approvalProcessing): self
    {
        $this->approvalProcessing = $approvalProcessing;

        return $this;
    }

    public function getImages(): ?array
    {
        return $this->images;
    }

    public function setImages(?array $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }

    public function setDimensions($dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getFace()
    {
        return $this->face;
    }

    public function setFace($face): self
    {
        $this->face = $face;

        return $this;
    }

    public function getHair()
    {
        return $this->hair;
    }

    public function setHair($hair): self
    {
        $this->hair = $hair;

        return $this;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function setSkills($skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?string $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    public function getCastingCategory(): ?int
    {
        return $this->castingCategory;
    }

    public function setCastingCategory(int $castingCategory): self
    {
        $this->castingCategory = $castingCategory;

        return $this;
    }
}
