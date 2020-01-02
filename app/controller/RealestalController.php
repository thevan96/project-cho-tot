<?php
namespace Controller;

use Core\Controller;

class RealestalController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
    }

    public function add()
    {
        $this->renderView('realestal/add');
    }
}
