<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\ArticlesRepository;
use App\Repositories\CommentsRepository;
use App\Repositories\MenusRepository;
use App\Repositories\PortfoliosRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ArticlesController extends DnvMasterController
{
    public function __construct(PortfoliosRepository $portfoliosRepository, ArticlesRepository $articlesRepository,CommentsRepository $commentsRepository)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menu()));
        $this->portfoliosRepository = $portfoliosRepository;
        $this->articlesRepository = $articlesRepository;
        $this->commentsRepository = $commentsRepository;
        $this->bar = 'right';
        $this->template = 'DnvMaster.articles';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category_alias = false)
    {
        $articles = $this->getArticles($category_alias);
        $content = view('DnvMaster.articles_content')->with('articles',$articles)->render();
        $this->vars = Arr::add($this->vars,'content',$content);

        $comments = $this->getComments(config('settings.comments'));
        $portfolios = $this->getPortfolios(config('settings.portfolios'));

        $this->contentRightBar = view('DnvMaster.articlesBar')->with(['comments'=>$comments,'portfolios'=>$portfolios])->render();

        return $this->DnvMasterOutput();
    }
    public function getComments($take)
    {
        $comments = $this->commentsRepository->get(['text','name','email','site','article_id','user_id'],$take);
        if ($comments)
        {
            $comments->load('article','user');
        }
        return $comments;
    }
    public function getPortfolios($take)
    {
        $portfolios = $this->portfoliosRepository->get(['title','text','alias','customer','img','filter_alias','created_at'],$take);
        return $portfolios;

    }
    public function getArticles($alias = false)
    {
        $where = false;
        if ($alias) {
            $id = Category::select('id')->where('alias',$alias)->first()->id;
            $where = ['category_id',$id];
        }
        $articles = $this->articlesRepository->get(['id', 'title', 'alias', 'created_at', 'img', 'short_text', 'bold_text', 'icon', 'text', 'desc', 'user_id', 'category_id'], false, true,$where);
        if ($articles) {
            $articles->load('user', 'category', 'comments');
        }
        return $articles;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($alias = false)
    {
        $article = $this->articlesRepository->one($alias,['comments'=>true]);
        if ($article)
        {
            $article->img = json_decode($article->img);
        }
        $content = view('DnvMaster.article_content')->with('article',$article)->render();
        $this->vars = Arr::add($this->vars,'content',$content);
        $comments = $this->getComments(config('settings.comments'));
        $portfolios = $this->getPortfolios(config('settings.portfolios'));
        $this->contentRightBar = view('DnvMaster.articlesBar')->with(['comments'=>$comments,'portfolios'=>$portfolios])->render();
        return $this->DnvMasterOutput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
