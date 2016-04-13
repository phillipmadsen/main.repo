<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Product;
use InfyOm\Generator\Common\BaseRepository;

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
