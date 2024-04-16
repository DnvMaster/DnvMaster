<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DnvMasterController extends Controller
{
    protected $title;
    protected $keywords;
    protected $description;
    protected $template;
    protected $vars = array();
    protected $leftBar = false;
    protected $rightBar = false;
    public function __construct()
    {
        //
    }
    protected function DnvMasterOutput()
    {
        $this->vars = Arr::add($this->vars,'title',$this->title);
        $this->vars = Arr::add($this->vars,'keywords',$this->keywords);
        $this->vars = Arr::add($this->vars,'description',$this->description);

        $top = view('DnvMaster.top')->render();
        $this->vars = Arr::add($this->vars, 'top',$top);

        $navigation = view('DnvMaster.navigation')->render();
        $this->vars = Arr::add($this->vars, 'navigation',$navigation);

        $footer = view('DnvMaster.footer')->render();
        $this->vars = Arr::add($this->vars, 'footer',$footer);

        return view($this->template)->with($this->vars);
    }
}
