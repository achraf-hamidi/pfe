<?php

use League\Fractal\TransformerAbstract;
use App\Animal;

class AnimalTransformer extends TransformerAbstract
{
    public function transform(Animal $animal)
    {
        return [
            'id'         => $animal->id,
            'name'       => $animal->Nom,
            // 'Categorie' => $animal->Categorie,
            // 'Son' => $animal->Son,
            // 'TypeNori' => $animal->TypeNori,
            // 'Photo' => $animal->Photo,
            // 'Desc' => $animal->Desc,
            // 'Zone' => $animal->Zone,
            'created_at' => $animal->created_at,
            'updated_at' => $animal->updated_at,
        ];
    }
}


