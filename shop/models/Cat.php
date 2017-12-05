<?php namespace Arteriaweb\Shop\Models;

use Model;

/**
 * Model
 */
class Cat extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_shop_cats';

    public $hasMany = [
        'prods' => 'Arteriaweb\Shop\Models\Prod',
        'table' => 'arteriaweb_shop_prods_cats'
    ];
}
