<?php

namespace App\Http\Controllers;

use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Menu;

class DnvMasterController extends Controller
{
    protected $title;
    protected $keywords;
    protected $description;
    protected $menusRepository;
    protected $slidersRepository;
    protected $articlesRepository;
    protected $portfoliosRepository;
    protected $template;
    protected $vars = array();
    protected $contentLeftBar = false;
    protected $contentRightBar = false;
    protected $bar = 'no';
    public function __construct(MenusRepository $menusRepository)
    {
        $this->menusRepository = $menusRepository;
    }
    protected function DnvMasterOutput()
    {
        $this->vars = Arr::add($this->vars,'title',$this->title);
        $this->vars = Arr::add($this->vars,'keywords',$this->keywords);
        $this->vars = Arr::add($this->vars,'description',$this->description);

        $top = view('DnvMaster.top')->render();
        $this->vars = Arr::add($this->vars, 'top',$top);

        $menu = $this->getMenu();
        $navigation = view('DnvMaster.navigation')->with('menu',$menu)->render();
        $this->vars = Arr::add($this->vars, 'navigation',$navigation);

        if ($this->contentRightBar)
        {
            $rightBar = view('DnvMaster.rightBar')->with('content_rightBar',$this->contentRightBar)->render();
            $this->vars = Arr::add($this->vars,'rightBar',$rightBar);
        }
        $this->vars = Arr::add($this->vars,'bar',$this->bar);

        $footer = view('DnvMaster.footer')->render();
        $this->vars = Arr::add($this->vars, 'footer',$footer);

        return view($this->template)->with($this->vars);
    }
    protected function getMenu()
    {
        $menu = $this->menusRepository->get();
        $mBuilder = Menu::make('Navigation',function($m) use($menu)
        {
            foreach($menu as $item)
            {
                if($item->parent == 0)
                {
                    $m->add($item->title,$item->path)->id($item->id);
                } else {
                    if($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title,$item->path)->id($item->id);
                    }
                }
            }
        });
        return $mBuilder;
    }
}
