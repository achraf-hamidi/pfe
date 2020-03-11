<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;

use App\User;
use App\Animal;

class UserController extends Controller
{


    public function index()
    {
        $ListAnimal=Animal::all();

        return view('user.article',compact('ListAnimal'));

    }
    


}
