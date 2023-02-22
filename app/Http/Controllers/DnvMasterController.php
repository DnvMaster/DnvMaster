<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DnvMasterController extends Controller
{
    protected $title;
    protected $description;
    protected $keywords;
    protected $template;
    protected $vars = array();
    public function __construct()
    {
        //
    }
    protected function masterOutput()
    {
        $this->vars = Arr::add($this->vars, 'title', $this->title);
        $this->vars = Arr::add($this->vars,'description', $this->description);
        $this->vars = Arr::add($this->vars,'keywords', $this->keywords);
        return view($this->template)->with($this->vars);
    }
}
