<?php namespace LeonidMuzyka\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLeonidmuzykaClientsOrders2 extends Migration
{
    public function up()
    {
        Schema::table('leonidmuzyka_clients_orders', function($table)
        {
            $table->string('client_commentary')->nullable(); // Once again added
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('leonidmuzyka_clients_orders', function($table)
        {
            $table->dropColumn('client_commentary');
            $table->string('name', 191)->change();
        });
    }
}
