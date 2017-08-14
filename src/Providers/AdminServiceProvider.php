<?php
namespace ZzDylan\Admin\Providers;
use Illuminate\Support\ServiceProvider;
class AdminServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../../config/admin.php' => config_path('admin.php')],'myadmin');
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

}