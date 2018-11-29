<?php namespace LeonidMuzyka\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLeonidmuzykaClientsOrders3 extends Migration
{
    public function up()
    {
        Schema::table('leonidmuzyka_clients_orders', function($table)
        {
            $table->string('name')->change();
            $table->string('client_commentary')->change();
        });
    }
    
    public function down()
    {
        Schema::table('leonidmuzyka_clients_orders', function($table)
        {
            $table->string('name', 191)->change();
            $table->string('client_commentary', 191)->change();
        });
    }
}
