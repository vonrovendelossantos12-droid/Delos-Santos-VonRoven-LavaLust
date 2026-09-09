<?php

class AuthMiddleware
{
    public function handle($next)
    {
        return $next();
    }
}