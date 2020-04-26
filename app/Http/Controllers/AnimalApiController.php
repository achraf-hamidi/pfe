<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Http\Requests\AnimalRequest;
use Auth;
use DB;

use Illuminate\Http\Request;

class AnimalApiController extends Controller
{
    public function index()
    {
        $Animals = auth()->user()->Animals;

        return response()->json(  $Animals );
    }

    public function show($id)
    {
        $Animal = auth()->user()->Animals()->find($id);

        if (!$Animal) {
            return response()->json('sorry', 400);
        }

        return response()->json( [$Animal->toArray()] , 200);
    }

    //  public function store( AnimalRequest $req)
    // {

    //     $Animal = new Animal();

    //     $Animal->user_id = Auth::user()->id;

    //     $Animal->Nom = $req->name;

    //     $Animal->Categorie= $req->Categorie;

    //     $Animal->Son= $req->son->store('animals-sonsAnimal');

    //     $Animal->TypeNori= $req->TypeNori;

    //     $Animal->urlVideo= $req->urlVideo;

    //     $Animal->Photo= $req->photo->store('animals-images');

    //     $Animal->Zone= $req->zone;

    //     $Animal->Desc= $req->Desc;




    //    //eg:  DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
    //     if (auth()->user()->Animals()->save($Animal))
    //         return response()->json('done',
    //              [
    //              'success' => true,
    //              'data' => $Animal->toArray()
    //               ]
    //     );
    //     else
    //         return response()->json('sorry',
    //              [
    //              'success' => false,
    //              'message' => 'Animal could not be added'
    //             ]
    //         , 500);
    // }

    // public function update(AnimalRequest $request, $id)
    // {
    //     // $Animal = auth()->user()->Animals()->find($id);
    //    // $Animal = Animal::where('pid', '=', Auth::user()->Animals()->pid);
    //    $userid=Auth::user()->id;
    //    $Animal =  DB::select('select * from `Animals` where `Animals`.`user_id` = ? and `Animals`.`user_id` is not null and `Animals`.`id` = ?', [$userid,$id]);

    //     if (!$Animal) {
    //         return response()->json('sorry', 400);
    //     }

    //     // DB::update('update Animals set name = ?,price=?,des=? where pid = ?',[$name,$price,$des,$id]);
    //    $updated = $Animal->fill($request->all())->save();

    //     if ($updated/*DB::update('update Animals set name = ?,price=?,des=? where pid = ?',[$name,$price,$des,$id])*/ )
    //         return response()->json('done',
    //             [
    //             'success' => true
    //              ]
    //     );
    //     else
    //         return response()->json('sorry',
    //             [
    //             'success' => false,
    //             'message' => 'Animal could not be updated'
    //         ]
    //         , 500);

    // }

    public function destroy($id)
    {
        $Animal = auth()->user()->Animals()->find($id);
        //  $userid=Auth::user()->id;
        //  $Animals =  DB::select('select * from `Animals` where `Animals`.`user_id` = ? and `Animals`.`user_id` is not null and `Animals`.`pid` = ?', [$userid,$id]);
        //  $Animal = Animal::where('Animals.pid',$id)->first();

        if (!$Animal) {
            return response()->json('sorry',
                 [
                 'success' => false,
                 'message' => 'Animal with id ' . $id . ' not found'
             ]
            , 400);
        }

        if ($Animal->delete() ) {
            return response()->json('done',
                 [
                 'success' => true
             ]
        );
        } else {
            return response()->json('sorry',
                 [
                 'success' => false,
                 'message' => 'Animal could not be deleted'
             ]
            , 500);
        }
    }
}

