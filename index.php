
<?php

require_once 'vendor/autoload.php';

use vosaka\foroutines\AsyncMain;
use vosaka\http\middleware\CorsMiddleware;
use vosaka\http\middleware\FaviconMiddleware;
use vosaka\http\server\HttpServer;
use vosaka\http\router\Router;
use vennv\weather_api\routers\PublicRoutes;

#[AsyncMain]
function main(): void {
	$router = Router::new();

	// Public routes
	PublicRoutes::new($router);

	$server = HttpServer::new($router)
		->withDebugMode(true)
		->layer(CorsMiddleware::permissive())
		->layer(FaviconMiddleware::noContent());

	$server->serve("0.0.0.0:8080");
}
