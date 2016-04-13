<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Article;
use InfyOm\Generator\Common\BaseRepository;

class ArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Article::class;
    }
}
