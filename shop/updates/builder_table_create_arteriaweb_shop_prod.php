<?php namespace Arteriaweb\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebShopProd extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_shop_prod', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('price');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_shop_prod');
    }
}
