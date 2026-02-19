<?php
class ApiEndPoint
{
    public static function getBaseUrl()
    {
        return env('API_URL', 'http://10.10.145.96/backend/public/index.php/api/v1');
    }

    // login endpoint
    public static function login()
    {
        return self::getBaseUrl() . '/auth/login';
    }
}
