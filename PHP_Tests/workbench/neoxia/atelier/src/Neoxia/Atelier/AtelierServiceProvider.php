<?php namespace Neoxia\Atelier;

use Illuminate\Support\ServiceProvider;

class AtelierServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('neoxia/atelier');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	    $this->app['atelier'] = $this->app->share(function($app)
	    {
	        return new Atelier();
	    });

	    $this->app->booting(function()
	    {
	        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
	        $loader->alias('Atelier', 'Neoxia\Atelier\Facades\Atelier');
	    });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('atelier');
	}

}