<?php namespace LeonidMuzyka\Clients;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents() {
	    return [
          'LeonidMuzyka\Clients\Components\Orderform' => 'Orderform'
      ];
    }

    public function registerSettings()
    {
    }
}
