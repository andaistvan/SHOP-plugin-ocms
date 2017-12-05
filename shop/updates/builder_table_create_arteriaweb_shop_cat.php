<?php namespace Arteriaweb\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebShopCat extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_shop_cat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_shop_cat');
    }
}
