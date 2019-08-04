<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\carbon;

class Message extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'location', 'body'];


public function sentOn()
{
    return $this->created_at->format('M d Y');
}


}
