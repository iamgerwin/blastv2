<?php namespace Alas\Providers;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider {

	$protected $smses = [];

	public function register()
	{
		$this->getAppName();

		$this->getLeadTypes();

		$this->app->singleto('smses', function() {
			return $this->smses;
		});
	}

}