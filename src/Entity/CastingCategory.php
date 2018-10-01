<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CastingCategoryRepository")
 * @ApiResource()
 */
class CastingCategory
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
    private $title;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Generates the magic method
     *
     */
    public function __toString(){
        // to show the name of the Category in the select
        return $this->title;
        // to show the id of the Category in the select
        // return $this->id;
    }
}
