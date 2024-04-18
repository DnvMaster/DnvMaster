<?php

namespace App\Http\Controllers;

use App\Repositories\SlidersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Config;

class IndexController extends DnvMasterController
{
    public function __construct(SlidersRepository $slidersRepository)
    {
        parent::__construct();
        $this->template = 'DnvMaster.index';
        $this->slidersRepository = $slidersRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'DnvMaster - Ваш источник знаний в Web-разработке';
        $this->keywords = 'HTML, CSS, JavaScript, PHP, Laravel, Node.js, Angular, React, Vue.js, Bootstrap, MySQL, Git, Back-end, Front-end';
        $this->description = 'Если Вы хотите иметь современный, высококачественный и функциональный веб-сайт, заходите к нам. Мы с удовольствием расскажем Вам, как воплотить ваши идеи в реальность и обеспечить успех в онлайн-мире.';

        $getsSliders = $this->getSliders();
        $sliders  = view('DnvMaster.sliders')->with('sliders',$getsSliders)->render();
        $this->vars = Arr::add($this->vars,'sliders',$sliders);

        $content = view('DnvMaster.content')->render();
        $this->vars = Arr::add($this->vars,'content',$content);

        return $this->DnvMasterOutput();

    }

    public function getSliders()
    {
        $sliders = $this->slidersRepository->getSlider();
        if ($sliders->isEmpty())
        {
            return false;
        }
        $sliders->transform(function ($item, $key)
        {
            $item->image = Config::get('settings.sliders_items').'/'.$item->image;
            return $item;
        });
        return $sliders;
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
