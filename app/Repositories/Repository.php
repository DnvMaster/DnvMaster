<?php

namespace App\Repositories;
use Config;
use Illuminate\Support\Facades\DB;

abstract class Repository
{
    protected $model = false;
    public function get($select = '*',$take = false)
    {
        $builder = $this->model->select($select);
        if($take)
        {
            $builder->take($take);
        }
        return $builder->get();
    }
}
