<?php

namespace App\UserInterface\Http;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PingController
{
    #[Route('/v1/ping')]
    public function Ping() : JsonResponse
    {
        $val = 'test';
        foreach (range(1, 10) as $i) {
            $val .= $i;
        }

        return new JsonResponse(['ping' => 'pong']);
    }
}
