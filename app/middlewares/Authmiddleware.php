<?php
namespace App\Middleware;

class AuthMiddleware
{
    public function handle($request, $next)
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /student');
            exit;
        }
        return $next($request);
    }
}