<?php
namespace Helper;

class SessionHelper
{
    public static function saveSession(array $params = [])
    {
        foreach($params as $key => $value)
        {
            $_SESSION[$key] = $value;
        }
    }

    public static function deleteSession(array $params = [])
    {
        session_destroy();
    }
}
