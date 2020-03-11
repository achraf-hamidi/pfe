<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
class PrintController extends Controller
{
    public function index()
    {
          $Animall = Animal::all();
          return view('printstudent')->with('Animall', $Animall);;
    }
    public function prnpriview()
    {
          $Animall = Animal::all();
          return view('students')->with('Animall', $Animall);;
    }
}

