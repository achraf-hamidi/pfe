<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name'=>'required|min:3',
            'name'=>'required',
            'photo' => 'mimes:jpeg,jpg,png,gif|required|max:50000',
            'Categorie'=> 'required',
            'son'=>'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
            'TypeNori'=> 'required',
            'urlVideo'=> 'required',
            'Zone'=>'min:3',
            'Desc'=>'required|min:3'




        ];
    }
}
