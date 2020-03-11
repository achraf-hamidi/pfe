<?php
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use App\Transformers\AnimalTransformer;
use App\Animal;

class AnimalApiController extends ApiGuardController
{
    public function all()
    {

        $Anim = Animal::all();
        //$apiKey = Chrisbjr\ApiGuard\Models\ApiKey::make($Anim);

      return $this->response->withCollection( $Anim, new AnimalTransformer);
        //return dd($Anim);
    }
}
