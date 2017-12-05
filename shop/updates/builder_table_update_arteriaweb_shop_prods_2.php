<?php namespace Arteriaweb\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebShopProds2 extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_shop_prods', function($table)
        {
            $table->integer('cat_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_shop_prods', function($table)
        {
            $table->dropColumn('cat_id');
        });
    }
}
