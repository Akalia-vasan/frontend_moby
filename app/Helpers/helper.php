<?php

if (!function_exists('api_url')) {

    function api_url($endUrl)
    {
        $baseUrl = 'http://localhost/backend/public/api/';
        $fullUrl = $baseUrl . $endUrl;
        return  $fullUrl;
    }
}
