<?php namespace Arteriaweb\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebShopCats3 extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_shop_cats', function($table)
        {
            $table->integer('prod_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_shop_cats', function($table)
        {
            $table->dropColumn('prod_id');
        });
    }
}
