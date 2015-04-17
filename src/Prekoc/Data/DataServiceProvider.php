<?php namespace Prekoc\Data;

use Illuminate\Support\ServiceProvider;

class DataServiceProvider extends ServiceProvider {

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
	// public function boot()
	// {
	// 	$this->package('freelistings/data');
	// }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
        $this->app->singleton('PrekocData', function() {
            return new Data;
        });
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
