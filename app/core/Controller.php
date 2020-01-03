<?php
namespace Core;

use Exception;

class Controller
{
    public function __construct()
    {
    }

    public function renderView(string $view, $data = [])
    {
        if (file_exists('app/view/' . $view . '.php')) {
            require_once sprintf('app/view/%s.php', $view);
        } else {
            throw new Exception('Error: File view not found');
        }
    }

    public function redirect(string $link)
    {
        header('location: ' . URLROOT . '/' . $link);
    }
}
