<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CastingFormRepository")
 * @ApiResource(
 *     collectionOperations={"post"},
 *     itemOperations={}
 * )
 */
class CastingForm
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Surname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sex;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     */
    private $birthDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $placeOfResidence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationality;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $portfolioLink;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $dimensions = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $body = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $face = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $hair = [];

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $skills;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $shortDescription;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $additionalInformation;

    /**
     * @ORM\Column(type="boolean")
     */
    private $approvalClause;

    /**
     * @ORM\Column(type="boolean")
     */
    private $approvalProcessing;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CastingCategory", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
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

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): self
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

    public function getDimensions(): ?array
    {
        return $this->dimensions;
    }

    public function setDimensions(?array $dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    public function getBody(): ?array
    {
        return $this->body;
    }

    public function setBody(?array $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getFace(): ?array
    {
        return $this->face;
    }

    public function setFace(?array $face): self
    {
        $this->face = $face;

        return $this;
    }

    public function getHair(): ?array
    {
        return $this->hair;
    }

    public function setHair(?array $hair): self
    {
        $this->hair = $hair;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(?string $skills): self
    {
        $this->skills = $skills;

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

    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?string $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;

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

    public function getCastingCategory(): ?CastingCategory
    {
        return $this->castingCategory;
    }

    public function setCastingCategory(CastingCategory $castingCategory): self
    {
        $this->castingCategory = $castingCategory;

        return $this;
    }
}
