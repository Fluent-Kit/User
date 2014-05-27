<?php
namespace FluentKit\User;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    public function register()
    {
        
        $this->app->bind('FluentKit\User\Repositories\UserRepositoryInterface', 'FluentKit\User\Repositories\UserRepository');

    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    public function provides(){
    	return array();
    }

}