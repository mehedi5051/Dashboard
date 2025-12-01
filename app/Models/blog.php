<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = ['tittle', 'category', 'sub_tittle', 'description', 'sub_description', 'image', 'thumbnail'];
}
