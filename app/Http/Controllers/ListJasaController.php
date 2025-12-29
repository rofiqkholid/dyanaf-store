<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListJasaController extends Controller
{
    public function index()
    {
        return view('list-jasa.list-jasa');
    }
}
