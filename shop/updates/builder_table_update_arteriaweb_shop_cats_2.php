<?php namespace Arteriaweb\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebShopCats2 extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_shop_cats', function($table)
        {
            $table->renameColumn('name', 'cat_name');
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_shop_cats', function($table)
        {
            $table->renameColumn('cat_name', 'name');
        });
    }
}
