<?php

class Book
{
    private ?int $id = null;

    /**
     * /!\ Attention à bien instancier la classe Book avec un float pour le price.
     */
    public function __construct(
        private string $title,
        private string $excerpt,
        private Author $author,
        private float $price // float c'est comme int, mais cela autorise les nombres à virgule
    ) {}

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getExcerpt(): string
    {
        return $this->excerpt;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    // Setters
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setExcerpt(string $excerpt): void
    {
        $this->excerpt = $excerpt;
    }

    public function setAuthor(Author $author): void
    {
        $this->author = $author;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}
