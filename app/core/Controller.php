<?php
namespace Core;

class Controller
{
    public function __construct()
    {

    }

    public function renderView(string $view, array $data = [])
    {
        require_once sprintf('../view/%s.php', $view);
    }

    public function redirect(string $link)
    {
        header("Location: $link");
    }
}
