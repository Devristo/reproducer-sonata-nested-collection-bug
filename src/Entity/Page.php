<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
final class Page
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column()
     */
    private ?int $id = null;

    /**
     * @ORM\ManyToOne(targetEntity=Chapter::class, inversedBy="pages")
     */
    private ?Chapter $chapter = null;

    /**
     * @ORM\Column()
     */
    private string $summary = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChapter(): ?Chapter
    {
        return $this->chapter;
    }

    public function setChapter(?Chapter $chapter): void
    {
        $this->chapter = $chapter;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
    }
}
