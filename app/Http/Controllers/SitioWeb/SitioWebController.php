<?php

namespace App\Http\Controllers\SitioWeb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SitioWebController extends Controller
{
    public function index()
    {
      //header("Location: https://registro.uniandes.edu.co/index.html");
      header("Location: https://registro.uniandes.edu.co/");
      die();
    }
}
