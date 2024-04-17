<?php

namespace App\Repositories;
use Config;

abstract class Repository
{
    public function getSet($select = '*')
    {
        $builder = $this->model->select($select);
        return $builder;
    }
}
