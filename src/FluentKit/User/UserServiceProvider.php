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
        
        $this->app->bindShared('fluentkit.user.repository', function(){
            return new FluentKit\User\Repositories\UserRepository;
        });

    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('fluentkit/user');
        $this->app['router']->controller('login', 'FluentKit\User\Controllers\AuthController');
    }

    public function provides(){
    	return array('fluentkit.user.repository');
    }

}