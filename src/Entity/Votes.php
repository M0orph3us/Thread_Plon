<?php

namespace App\Entity;

use App\Repository\VotesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VotesRepository::class)]
class Votes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $vote = null;

    #[ORM\ManyToOne(inversedBy: 'votes')]
    private ?Responses $response = null;

    #[ORM\ManyToOne(inversedBy: 'votes')]
    private ?Users $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isVote(): ?bool
    {
        return $this->vote;
    }

    public function setVote(bool $vote): static
    {
        $this->vote = $vote;

        return $this;
    }

    public function getResponse(): ?Responses
    {
        return $this->response;
    }

    public function setResponse(?Responses $response): static
    {
        $this->response = $response;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): static
    {
        $this->user = $user;

        return $this;
    }
}
