<?php

declare(strict_types=1);

namespace vennv\weather_api\handlers;

use vosaka\http\message\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class HealthHandler {
	public static function health(ServerRequestInterface $request): ResponseInterface {
		return Response::text('OK')->withStatus(200);
	}
}
