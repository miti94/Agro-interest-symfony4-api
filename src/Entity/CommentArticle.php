<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentArticleRepository")
 */
class CommentArticle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("group_comment_article")
     * @Groups("group_article")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=false)
     * @Groups("group_comment_article")
     * @Groups("group_article")
     */
    private $commentContent;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * @Groups("group_comment_article")
     * @Groups("group_article")
     */
    private $authorName;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Article", inversedBy="commentArticles")
     * @Groups("group_comment_article")
     */
    private $article;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups("group_comment_article")
     * @Groups("group_article")
     */
    private $commented_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentContent(): ?string
    {
        return $this->commentContent;
    }

    public function setCommentContent(?string $commentContent): self
    {
        $this->commentContent = $commentContent;

        return $this;
    }

    public function getAuthorName(): User
    {
        return $this->authorName;
    }

    public function setAuthorName(User $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getCommentedAt(): ?\DateTimeInterface
    {
        return $this->commented_at;
    }

    public function setCommentedAt(?\DateTimeInterface $commented_at): self
    {
        $this->commented_at = $commented_at;

        return $this;
    }
}
