<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\carbon;

class Message extends Model
{
    //


public function sentOn()
{
    return $this->created_at->format('M d Y');
}


}
