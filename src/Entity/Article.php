<?php
// src/Entity/Article.php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Article
{
    /**
     * @Assert\Length(
     *     min = 10,
     *     max = 70,
     *     minMessage = "Ce titre est trop court",
     *     maxMessage = "Ce titre est trop long"
     * )
     */
    private $title;

    /**
     * @Assert\NotBlank(message = "Le contenu ne peut être vide.")
     */
    private $content;

    /**
     * @Assert\NotBlank(message = "Un auteur doit être associé à l'article")
     */
    private $author;

    /* ... */
}