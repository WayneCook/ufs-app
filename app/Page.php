<?php

namespace App;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;
use Illuminate\Notifications\Notifiable;
use CyrildeWit\EloquentViewable\Viewable;

use Illuminate\Database\Eloquent\Model;

class Page extends Model implements ViewableContract
{
    use Viewable;

    public function home()
    {
        return $this->where('slug', 'home')->first();
    }

}
