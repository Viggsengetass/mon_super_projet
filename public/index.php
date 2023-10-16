<?php
// index.php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$url = $request->getPathInfo();
$response = new Response();

switch($url) {
    case '/':
        $response->setContent('Accueil');
        break;
    case '/admin':
        $response->setContent('Accès Espace Admin');
        break;
    default:
        $response->setStatusCode(Response::HTTP_NOT_FOUND);
}

$response->send();
