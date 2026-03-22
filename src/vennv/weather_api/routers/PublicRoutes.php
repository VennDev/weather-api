<?php

declare(strict_types=1);

namespace vennv\weather_api\routers;

use vosaka\http\router\Router;
use vennv\weather_api\handlers\HealthHandler;
use vennv\weather_api\handlers\WeatherHandler;
use vosaka\http\router\RouteGroup;

final class PublicRoutes {
	public static function new(Router &$router): void {
		$router->group('/api/v1', function (RouteGroup $router): void {
			$router->get('/health', HealthHandler::health(...));
			$router->get('/weather', WeatherHandler::weather(...));
		});
	}
}
