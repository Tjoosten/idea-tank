<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdeaCategory extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Hidden fields.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
}
