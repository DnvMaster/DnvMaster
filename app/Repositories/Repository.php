<?php

namespace App\Repositories;
use Config;
use Illuminate\Support\Facades\DB;

abstract class Repository
{
    protected $modal = false;
    public function getSlider()
    {
        $builder = DB::table('sliders')->select('*')->get();
        return $builder;
    }
}
