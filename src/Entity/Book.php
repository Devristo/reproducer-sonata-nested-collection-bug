<?php


namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
final class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column()
     */
    private ?int $id = null;

    /**
     * @ORM\OneToMany(targetEntity=Chapter::class, mappedBy="book")
     */
    private Collection $chapters;

    public function __construct()
    {
        $this->chapters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChapters(): Collection
    {
        return $this->chapters;
    }

    public function addChapter(Chapter $chapter): void
    {
        $this->chapters->add($chapter);
    }

    public function removeChapter(Chapter $chapter): void
    {
        $this->chapters->removeElement($chapter);
    }
}
