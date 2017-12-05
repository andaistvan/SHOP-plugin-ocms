<?php namespace Arteriaweb\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebShopCats extends Migration
{
    public function up()
    {
        Schema::rename('arteriaweb_shop_cat', 'arteriaweb_shop_cats');
    }
    
    public function down()
    {
        Schema::rename('arteriaweb_shop_cats', 'arteriaweb_shop_cat');
    }
}
