<?php
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AnimalRequest;
use App\Animal;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/more', function () {
    return view('user.redmore');
});

/*Route::get('/sss', function () {
    return view('user.article');
});*/
Route::get('/vvv', function () {
    return view('graph');
});
//Route::get('/sss', 'UserController@index');
Route::get('/article', 'UserController@index');




Route::post('/search', function () {

        $q=input::get('q');
        if ($q != "" ){
            $ListAnimal = Animal::where('Nom','LIKE','%'.$q.'%')
                            ->orwhere('Categorie','LIKE','%'.$q.'%')
                            ->orwhere('TypeNori','LIKE','%'.$q.'%')
                            ->orwhere('Categorie','LIKE','%'.$q.'%')
                            ->get();

            if (count( $ListAnimal)>0) {
                        return view('user.article')->withDetails($ListAnimal )->withQuery($q);

            }
        return view('user.article')->withMessage("no animal founded");
        }

});
Route::post('/redmore', function () {



        $q=input::get('qq');

        $anim = Animal::find($q);
        //$ListAnimal=Animal::all();
        //return view('user.redmore');
       // return view('animal.index',compact('ListAnimal'));
        return view('user.redmore',compact('anim'));



});

Route::get('/reptiles', function () {


        $ListAnimal = Animal::where('Categorie','LIKE','Reptiles')
                           ->get();

         if (count( $ListAnimal)>0) {
                    return view('user.article')->withDetails($ListAnimal );

         }else {
            return view('404')->withDetails($ListAnimal );
         }


    });

    Route::get('/oiseaux', function () {



        $ListAnimal = Animal::where('Categorie','LIKE','oisaux')
                           ->get();

         if (count( $ListAnimal)>0) {
                    return view('user.article')->withDetails($ListAnimal );

         }


    });
    Route::get('/mammifers', function () {



        $ListAnimal = Animal::where('Categorie','LIKE','mammifers')
                           ->get();

         if (count( $ListAnimal)>0) {
                    return view('user.article')->withDetails($ListAnimal );

         }
      return view('user.article')->withMessage("no animal founded");


    });




    // Route::get('/redmore/{id}', function ($id) {
    //     // echo $id ;
    //      $anim = Animal::find($id);

    //      return view('user.redmore',compact('anim'));

    //      //return view('user.redmore',['anim'=>$anim]);

    //  });






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');
Route::get('/users/logout', 'Auth\LoginController@userlogout')->name('admin.logout');


    //Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    //Route::post('admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    //Route::get('admin/','Auth\AdminLoginController@index')->name('admin.dashboard');
    Route::prefix('admin')->group(function() {
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
        Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    });

    Route::get('animals', 'AnimalController@index');
    Route::get('animals/create', 'AnimalController@create');
    Route::post('animals', 'AnimalController@store');
    Route::get('animals/{id}/edit', 'AnimalController@edit');
    Route::put('animals/{id}', 'AnimalController@update');
    Route::delete('animals/{id}', 'AnimalController@destroy');








