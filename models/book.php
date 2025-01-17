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
    private float $price,  // float c'est comme int, mais cela autorise les nombre à virgule
  ) {}
}
