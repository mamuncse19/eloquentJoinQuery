<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
    	'user_id', 'category_id', 'title', 'description',
    ];
}
