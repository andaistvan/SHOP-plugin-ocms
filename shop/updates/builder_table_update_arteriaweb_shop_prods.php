<?php namespace Arteriaweb\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebShopProds extends Migration
{
    public function up()
    {
        Schema::rename('arteriaweb_shop_prod', 'arteriaweb_shop_prods');
    }
    
    public function down()
    {
        Schema::rename('arteriaweb_shop_prods', 'arteriaweb_shop_prod');
    }
}
