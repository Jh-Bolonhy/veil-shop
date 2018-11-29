<?php namespace LeonidMuzyka\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLeonidmuzykaClientsOrders extends Migration
{
    public function up()
    {
        Schema::create('leonidmuzyka_clients_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leonidmuzyka_clients_orders');
    }
}
