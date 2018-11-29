<?php namespace LeonidMuzyka\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLeonidmuzykaClientsOrders extends Migration
{
    public function up()
    {
        Schema::table('leonidmuzyka_clients_orders', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
            $table->integer('phone')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('leonidmuzyka_clients_orders', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
            $table->string('phone', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
