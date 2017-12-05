<?php namespace Arteriaweb\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebShopProdsCats extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_shop_prods_cats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('prod_id');
            $table->integer('cat_id');
            $table->primary(['prod_id','cat_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_shop_prods_cats');
    }
}
