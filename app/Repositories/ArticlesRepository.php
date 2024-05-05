<?php
namespace App\Repositories;
use App\Models\Article;
class ArticlesRepository extends Repository
{
    public function __construct(Article $article)
    {
        $this->model = $article;
    }
    public function one($alias, $attribute = array())
    {
        $article = parent::one($alias, $attribute);
        if ($article && !empty($attribute))
        {
            $article->load('comments');
            $article->comments->load('user');
        }
        return $article;
    }
}
