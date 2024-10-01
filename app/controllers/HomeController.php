<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {

        // session_start();
        // if (!isset($_SESSION['user_id'])) {
        //     header('Location: /login');
        //     exit;
        // }

        $this->view('home/index');
    }
}