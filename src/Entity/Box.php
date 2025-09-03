<?php

namespace App\Entity;

use App\Repository\BoxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoxRepository::class)]
class Box
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Flashcard>
     */
    #[ORM\OneToMany(targetEntity: Flashcard::class, mappedBy: 'box')]
    private Collection $question;

    public function __construct()
    {
        $this->question = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Flashcard>
     */
    public function getQuestion(): Collection
    {
        return $this->question;
    }

    public function addQuestion(Flashcard $question): static
    {
        if (!$this->question->contains($question)) {
            $this->question->add($question);
            $question->setBox($this);
        }

        return $this;
    }

    public function removeQuestion(Flashcard $question): static
    {
        if ($this->question->removeElement($question)) {
            // set the owning side to null (unless already changed)
            if ($question->getBox() === $this) {
                $question->setBox(null);
            }
        }

        return $this;
    }
}
