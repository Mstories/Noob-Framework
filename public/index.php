<?php

require_once "../vendor/autoload.php";

use Noob\HttpNotFoundException;
use Noob\Router;

$router = new Router();

$router->get('/test', function () {
  return "Get OK";
});

$router->post('/test', function () {
  return "POST OK";
});

try {
  $action = $router->resolve();
  print($action());
} catch (HttpNotFoundException $e) {
  print("Not found");
  http_response_code(404);
}
