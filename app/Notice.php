<?php

namespace App;

use Cocur\Slugify\Slugify;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Notice extends Model
{
    //
    use Sluggable;

    protected $fillable = ['title', 'description', 'file',];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function customizeSlugEngine(Slugify $engine, $attribute)
    {
      // $engine->activateRuleset('bangla');
        $engine-> addRule('ক', 'ka');
        return $engine;
    }
}
