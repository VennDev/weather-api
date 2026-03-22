# Weather API

A high-performance Weather REST API built with PHP using the Vosaka framework, leveraging asynchronous processing with Coroutines.

## Features
- Asynchronous execution using `vosaka-fourotines`.
- High-performance HTTP server via `vosaka-http`.
- Structured routing and request handling.
- Integrated CORS and Favicon middleware.

## Project Structure
- `src/vennv/weather_api/handlers/`: Contains the request logic for Weather and Health checks.
- `src/vennv/weather_api/routers/`: Defines the API endpoints.
- `index.php`: The main entry point of the application.
- `start.sh`: Shell script to start the server.

## Requirements
- PHP 8.1 or higher (required for Fibers and Coroutines).
- Composer for dependency management.

## Installation
1. Clone the repository.
2. Install the required packages:
   ```bash
   composer install
   ```

## Running the Application
To start the server on `0.0.0.0:8080`, run:
```bash
./start.sh
```
Alternatively, you can run it directly with PHP:
```bash
php index.php
```

## API Endpoints
Based on the current configuration, the server exposes:
- `GET api/v1/weather`: Weather information.
- `GET api/v1/health`: System health status.

## Dependencies
- [vosaka-http](https://github.com/venndev/vosaka-http)
- [vosaka-fourotines](https://github.com/venndev/vosaka-fourotines)
# weather-api
