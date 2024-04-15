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

        return view($this->template)->with($this->vars);
    }
}
