<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/11/17
 * Time: 7:17 PM
 */

namespace Ashrafi\CrudActions;

use Illuminate\Support\ServiceProvider as laraServiceProvider;

class ServiceProvider  extends laraServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'CrudActions');
    }

    public function register(){
        include __DIR__.'/routes.php';
    }

}