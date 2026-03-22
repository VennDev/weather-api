<?php

declare(strict_types=1);

namespace vennv\weather_api\routers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use vosaka\http\router\Router;
use vennv\weather_api\handlers\HealthHandler;
use vennv\weather_api\handlers\WeatherHandler;
use vosaka\http\router\RouteGroup;

final class PublicRoutes {
	public static function new(Router &$router): void {
		$router->group('/api/v1', function (RouteGroup $router): void {
			$router->get('/health', fn(ServerRequestInterface $request): ResponseInterface => HealthHandler::health($request));
			$router->get('/weather', fn(ServerRequestInterface $request): ResponseInterface => WeatherHandler::weather($request));
		});
	}
}
