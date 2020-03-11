<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use App\Animal;
use App\Http\Requests\AnimalRequest;

class AnimalController extends Controller
{
    //lister les cv

    public function __construct(){

        $this->middleware('auth');

    }
    public function index()
    {
        $ListAnimal=Animal::all();

        return view('animal.index',compact('ListAnimal'));

    }
    //aenrgester un animal
    public function store(AnimalRequest $req)
    {

        $animal = new Animal();

        $animal->Nom = $req->input('name');

        $animal->Categorie= $req->input('Categorie');

        $animal->Son= $req->son->store('animals-sons');

        $animal->TypeNori= $req->input('TypeNori');

        $animal->Photo= $req->photo->store('animals-images');

        $animal->Zone= $req->input('zone');

        $animal->Desc= $req->input('Desc');


        $animal->save();

        session()->flash('success','you add an animal with success');


        return redirect('animals');


    }
    //affiche le formulaire
    public function create()
    {
        //return view('animal.create');
        return view('animal.create');


    }
    //recupair  un animal et puis le modifier et le mettre dans un formulaire
    public function edit($id)
    {
        $anim = Animal::find($id);

        return view('animal.edit',['anim'=>$anim]);

    }
    

    //permet de modifer un animal
    public function update(AnimalRequest $req,$id)
    {
        $anim = Animal::find($id);

        $animal->Nom = $req->input('name');
        $animal->Categorie= $req->input('Categorie');
        $animal->Son= $req->son->store('animal-son');
        $animal->TypeNori= $req->input('TypeNori');
        $animal->Photo= $req->photo->store('animal-images');
        $animal->Desc= $req->input('Desc');
        $animal->Zone= $req->input('zone');
        $animal->Desc= $req->input('Desc');


        $animal->save();

        return redirect('animals');

    }
    //supprimer un animal
    public function destroy(Request $req,$id)
    {

        $anim = Animal::find($id);
        $anim->delete();

       return redirect('animals')->with('success', 'Well Deleted!');

    }

}
