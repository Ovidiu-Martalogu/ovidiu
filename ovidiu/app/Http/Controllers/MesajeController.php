<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MesajeController extends Controller
{
    public function mesaje()
    {
      
        return view('/mesaje');
    }
}
