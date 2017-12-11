<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 04/12/2017
 * Time: 22:55
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class WelcomeController extends controller
{
    public function index()
    {
        $name = 'Kelvis';
        return view('welcome', ['n' => $name]);
    }
}