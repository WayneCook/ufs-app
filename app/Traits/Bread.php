<?php

namespace App\Traits;


trait Bread {

    public function bread($name)
    {
        return config("bread.{$name}");
    }


}