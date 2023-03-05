<?php

namespace App\Http\Controllers;

use Menu;
use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DnvMasterController extends Controller
{
    protected $title;
    protected $description;
    protected $keywords;
    protected $menus_repository;
    protected $sliders_repository;
    protected $template;
    protected $vars = array();
    public function __construct(MenusRepository $menus_repository)
    {
        $this->menus_repository = $menus_repository;
    }
    protected function masterOutput()
    {
        $this->vars = Arr::add($this->vars, 'title', $this->title);
        $this->vars = Arr::add($this->vars,'description', $this->description);
        $this->vars = Arr::add($this->vars,'keywords', $this->keywords);

        $menu = $this->menuNav();
        $navMenu = view(env('DNVMASTER').'.navMenu')->with('navMenu',$menu)->render();
        $this->vars = Arr::add($this->vars,'navMenu', $navMenu);

        $topBar = view(env('DNVMASTER').'.topBar')->render();
        $this->vars = Arr::add($this->vars,'topBar', $topBar);

        $footer = view(env('DNVMASTER').'.footer')->render();
        $this->vars = Arr::add($this->vars,'footer', $footer);

        $menuStart = view(env('DNVMASTER').'.menuStart')->render();
        $this->vars = Arr::add($this->vars,'menuStart', $menuStart);

        return view($this->template)->with($this->vars);
    }
    public function menuNav()
    {
        $menu = $this->menus_repository->get();
        $mBuilder = Menu::make('MyNav', function($m) use($menu)
        {
            foreach ($menu as $item)
            {
                if ($item->parent == 0)
                {
                    $m->add($item->title,$item->path)->id($item->id);
                }
                else
                {
                    if ($m->find($item->parent))
                    {
                        $m->find($item->parent)->add($item->title,$item->path)->id($item->id);
                    }
                }
            }
        });
        return $mBuilder;
    }

}
