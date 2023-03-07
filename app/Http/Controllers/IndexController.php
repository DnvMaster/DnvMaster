<?php

namespace App\Http\Controllers;

use App\Repositories\PortfoliosRepository;
use App\Repositories\SlidersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Config;

class IndexController extends DnvMasterController
{
    public function __construct(SlidersRepository $sliders_repository,PortfoliosRepository $portfolios_repository)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu()));
        $this->sliders_repository = $sliders_repository;
        $this->portfolios_repository = $portfolios_repository;
        $this->bar = 'right';
        $this->template = env('DNVMASTER').'.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'DnvMaster - Всё о веб разработке';
        $this->keywords = 'Прораммирование и создание адаптивных веб сайтов, визитка, корпоративный блог, интернет-магазин ...';
        $this->description = 'Веб сайты, адаптивность, LARAVEL, HTML5, CSS, BOOTSTRAP, JAVASCRIPT, MySQL, PHP, IDE, Блог, Сайт-визитка, FRAMEWORKS ...';

        $slidersImg = $this->sliderItems();
        $sliders = view(env('DNVMASTER').'.sliders')->with('sliders',$slidersImg)->render();
        $this->vars = Arr::add($this->vars,'sliders',$sliders);

        $portfolios = $this->portfoliosItems();
        $content = view(env('DNVMASTER').'.content')->with('portfolios',$portfolios)->render();
        $this->vars = Arr::add($this->vars,'content', $content);

        return $this->masterOutput();
    }

    public function sliderItems()
    {
        $sliders = $this->sliders_repository->get();
        if ($sliders->isEmpty())
        {
            return false;
        }
        $sliders->transform(function ($item,$key)
        {
            $item->img = Config::get('settings.slider_path').'/'.$item->img;
            return $item;
        });
        return $sliders;
    }

    protected function portfoliosItems()
    {
        $portfolios = $this->portfolios_repository->get('*',Config::get('settings.portfolios_count'));
        return $portfolios;
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
    public function show($id)
    {
        //
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
