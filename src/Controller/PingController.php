<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PingController
{
    #[Route('/v1/ping')]
    public function Ping(Request $request) : JsonResponse
    {
        return new JsonResponse(['ping' => true]);
    }
}