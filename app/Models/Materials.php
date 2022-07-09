<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Materials extends Model
{
    use HasFactory;
    use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'materials.name' => 10,
            'materials.author' => 8,
            'materials.type' => 8,
            'category.name' => 8,
        ],
        'joins' => [
            'posts' => ['materials.name','category.name'],
        ],
    ];
    protected $fillable = [
        'name',
        'author',
        'type',
        'category'
        ];

    public function posts(){
        return $this->hasMany('Post');
    }

    public function searchMaterials($search){
        return $this->search($search)->get();
    }
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
