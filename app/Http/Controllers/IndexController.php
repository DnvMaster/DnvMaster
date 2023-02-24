<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class IndexController extends DnvMasterController
{
    public function __construct()
    {
        parent::__construct();
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
        $topBar = view(env('DNVMASTER').'.topBar')->render();
        $this->vars = Arr::add($this->vars,'topBar', $topBar);
        return $this->masterOutput();
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
