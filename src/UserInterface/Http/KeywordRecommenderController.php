<?php

namespace App\UserInterface\Http;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class KeywordRecommenderController 
{
    
    #[Route('/v1/tags/{tag}/keywords')]
    public function query(?string $tag = ''): JsonResponse 
    {
        $rest = [];
        if ($tag === '') {
            $rest = ['foo', 'bar'];
        }
        return new JsonResponse(['keyword' => $tag]);
    }
}