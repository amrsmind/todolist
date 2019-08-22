<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todoitem extends Model
{
    protected $table = 'todoitems';
    protected $fillable = ['title','content','user_id'];
}
