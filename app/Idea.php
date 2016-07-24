<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Idea
 * @package App
 */
class Idea extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['category', 'title', 'description'];

    /**
     * Hidden fields;
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * Category relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\IdeaCategory', 'id', 'category');
    }
}
