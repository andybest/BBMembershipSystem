<?php namespace BB\Providers;

use BB\Domain\Infrastructure\Room;
use BB\Domain\Infrastructure\RoomRepository;
use Doctrine\ORM\EntityManager;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(EntityManager $em)
	{
		/** @var $em \Doctrine\ORM\EntityManager */
		$platform = $em->getConnection()->getDatabasePlatform();

		//register the enum type
		$platform->registerDoctrineTypeMapping('enum', 'string');
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			\Illuminate\Contracts\Auth\Registrar::class,
			\BB\Services\Registrar::class
		);
	}

}
