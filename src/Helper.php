<?php

namespace KashifBD;

class Helper
{
    /**
     * Simple example: return formatted text
     */
    public static function format($text)
    {
        return strtoupper(trim($text));
    }

    /**
     * Example: generate random string
     */
    public static function randomString($length = 16)
    {
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, $length);
    }

    /**
     * Example: return package version
     */
    public static function version()
    {
        return '1.0.0';
    }

    /**
     * Example: check if URL is valid
     */
    public static function isValidUrl($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }
}
