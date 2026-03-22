<?php

declare(strict_types=1);

namespace vennv\weather_api\handlers;

use vosaka\http\message\Response;
use vosaka\http\Browzr;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class WeatherHandler {
	public static function weather(ServerRequestInterface $request): ResponseInterface {
		/** @var \vosaka\http\message\Response $resultGPS */
		$resultGPS = Browzr::get('https://ipinfo.io/json')->await();
		$resultGPS = json_decode($resultGPS->getBody()->getContents(), true);

		$loc = $resultGPS['loc'];
		$parts = explode(',', $loc);
		$lat = $parts[0];
		$lon = $parts[1];

		/** @var \vosaka\http\message\Response $resultWeather */
		$resultWeather = Browzr::get(
			'https://api.open-meteo.com/v1/forecast?latitude=' . $lat . '&longitude=' . $lon . '&current_weather=true'
		)->await();
		$resultWeather = json_decode($resultWeather->getBody()->getContents(), true);

		return Response::json($resultWeather);
	}
}
