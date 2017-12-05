<?php namespace Arteriaweb\Shop\Models;

use Model;

/**
 * Model
 */
class Prod extends Model
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
    public $table = 'arteriaweb_shop_prods';

    public $belongsTo = [
        'cat' => 'Arteriaweb\Shop\Models\Cat',
        // 'table' => 'arteriaweb_shop_prods_cats'        
    ];
    

}
