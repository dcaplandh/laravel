<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('home');
    }
    public function nosotros()
    {
        return view('nosotros');
    }
    public function quienessomos()
    {
        return view('quienessomos');
    }
    public function servicios()
    {
        return view('servicios');
    }
    public function contacto()
    {
        return view('contacto');
    }
}
