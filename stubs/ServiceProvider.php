<?php

namespace StubModuleNamespace\StubClassNamePrefix\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class StubClassNamePrefixServiceProvider extends ServiceProvider implements DeferrableProvider
{
	public function register()
	{
	}
	
	public function boot()
	{
	}
}
