<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Product",
 *      required={name},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="meta_title",
 *          description="meta_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="facebook_title",
 *          description="facebook_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="google_plus_title",
 *          description="google_plus_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="meta_description",
 *          description="meta_description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="short_description",
 *          description="short_description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description",
 *          description="description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="category_id",
 *          description="category_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="price",
 *          description="price",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="sku",
 *          description="sku",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="mpn",
 *          description="mpn",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="imageurl",
 *          description="imageurl",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="file_id",
 *          description="file_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_active",
 *          description="is_active",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="string"
 *      )
 * )
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'meta_title',
        'facebook_title',
        'google_plus_title',
        'meta_description',
        'short_description',
        'description',
        'category_id',
        'price',
        'sku',
        'mpn',
        'imageurl',
        'file_id',
        'created_at',
        'updated_at',
        'is_active',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'meta_title' => 'string',
        'facebook_title' => 'string',
        'google_plus_title' => 'string',
        'meta_description' => 'string',
        'short_description' => 'string',
        'description' => 'string',
        'category_id' => 'integer',
        'price' => 'float',
        'sku' => 'string',
        'mpn' => 'string',
        'imageurl' => 'string',
        'file_id' => 'string',
        'is_active' => 'boolean',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];
}
