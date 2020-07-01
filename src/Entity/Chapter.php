<?php


namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
final class Chapter
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column()
     */
    private ?int $id = null;

    /**
     * @ORM\ManyToOne(targetEntity=Book::class, inversedBy="chapters")
     */
    private ?Book $book = null;

    /**
     * @ORM\Column()
     */
    private string $title = '';

    /**
     * @ORM\OneToMany(targetEntity=Page::class, mappedBy="chapter")
     */
    private Collection $pages;

    public function __construct()
    {
        $this->pages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }

    public function setBook(?Book $book): void
    {
        $this->book = $book;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function addPage(Page $page): void
    {
        $this->pages->add($page);
    }

    public function removePage(Page $page): void
    {
        $this->pages->removeElement($page);
    }

    public function getPages(): Collection
    {
        return $this->pages;
    }
}
