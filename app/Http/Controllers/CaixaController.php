<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaixaController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function dashboard(){
        return view('operador/dashboard');
    }

}
